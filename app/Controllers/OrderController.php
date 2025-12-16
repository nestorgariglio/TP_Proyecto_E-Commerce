<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\ProductModel;
use CodeIgniter\Controller;


class OrderController extends Controller
{
  public function checkout() {

    $cart = session()->get('cart') ?? [];
    if(empty($cart)) {
      return redirect()->to('/cart')->with('error', 'El carrito está vacío.');
    }

    echo view ('checkout', ['cart' => $cart]);
  }

  public function list() {
    if (!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para ver tus compras.');
    }

    $orderModel = new OrderModel();
    $fromDate = $this->request->getGet('from');
    $toDate = $this->request->getGet('to');

    $builder = $orderModel->where('user_id', session('user_id'))
                          ->orderBy('created_at', 'DESC');
    
    if ($fromDate && $toDate) {
      $builder->where('created_at >=', value: $fromDate . ' 00:00:00')
              ->where('created_at <=', value: $toDate . ' 23:59:59');
    }
    $orders = $builder->findAll();

    echo view('orders', [
      'orders'  => $orders,
      'from'    => $fromDate,
      'to'      => $toDate
    ]);
  }

  // Muestra el detalle de una orden específica
  public function detail($orderId) {
    
    if(!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para ver tus comprobantes');
    }

    $orderModel = new OrderModel();
    $orderItemModel = new OrderItemModel();

    $order = $orderModel
      ->where('id', $orderId)
      ->where('user_id', session('user_id'))
      ->first();

    if (!$order) {
      return redirect()->to('/orders')->with('error', 'Orden no encontrada.');
    }

    $items = $orderItemModel->where('order_id', $orderId)->findAll();

    echo view('order_detail', [
      'order' => $order,
      'items' => $items,
    ]);
  }

  public function process(){
    $cart = session()->get('cart') ?? [];
    if (empty($cart)) {
      return redirect()->to('/cart')->with('error', 'El carrito está vacío.');
    }

    if (!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para comprar');
    }

    $rules = [
      'dni'             => 'required|numeric|min_length[7]|max_length[8]',
      'shipping_method' => 'required',
      'payment_method'  => 'required',
    ];

    $message = [
      'dni' => [
        'required'    => 'El DNI es obligatorio.',
        'numeric'     => 'El DNI debe contener solo números.',
        'min_length'  => 'El DNI es demasiado corto.',
        'max_length'  => 'El DNI es demasiado largo.'
      ],
      'shipping_method' => ['required' => 'Debes seleccionar una forma de entrega.'],
      'payment_method'  => ['required' => 'Debes seleccionar un método de pago.']
    ];

    if (!$this->validate($rules, $message)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $dni = $this->request->getPost(('dni'));
    $shippingMethod = $this->request->getPost('shipping_method');
    $paymentMethod = $this->request->getPost('payment_method');
    $address = $this->request->getPost('address');

    $subtotalProductos = 0;
    $shippingCost = 0;

    foreach($cart as $item) {
      $subtotalProductos += $item['price'] * $item['quantity'];
    }

    if ($shippingMethod === 'delivery') {
      $shippingCost = $subtotalProductos >= 70000 ? 0 : 2000;
      if (empty($address)) {
        return redirect()->back()->with('error', 'La dirección es obligatoria para envíos.');
      }
    } else {
      $address = 'Retiro en Local';
    }

    $orderStatus = ($paymentMethod === 'card') ? 'Pagado' : 'Pendiente';

    $db = \Config\Database::connect();
    $db->transStart();

    try {
      $productModel = new ProductModel();
      $orderModel = new OrderModel();
      $orderItemModel = new OrderItemModel();

      $totalFinal = $subtotalProductos + $shippingCost;

      $orderId = $orderModel->insert([
        'user_id' => session('user_id'),
        'dni_cliente' => $dni,
        'total' => $totalFinal,
        'status' => $orderStatus,
        'payment_method' => $paymentMethod,
        'shipping_method' => $shippingMethod,
        'shipping_cost' => $shippingCost,
        'shipping_address' => $address
      ], true);

      foreach($cart as $item) {
        $product = $productModel->find($item['id']);

        if (!$product) {
          throw new \Exception('El producto ' . $item['name'] . ' ya no existe.');
        }

        if ($product['stock'] < $item['quantity']) {
          throw new \Exception('Stock insuficiente para: ' . $product['name'] .' - Disponibles: ' . $product['stock']);
        }

        $orderItemModel->insert([
          'order_id'    => $orderId,
          'product_id'  => $item['id'],
          'name'        => $item['name'],
          'price'       => $item['price'],
          'quantity'    => $item['quantity']
        ]);

        $newStock = $product['stock'] - $item['quantity'];
        $updateData = ['stock' => $newStock];

        if ($newStock === 0) {
          $updateData['is_active'] = 0;
        }

        $productModel->update($item['id'], $updateData);
      }

      $db->transComplete();
      
      if ($db->transStatus() === false) {
        return redirect()->to('/cart')->with('eror', 'Error al procesar la compra.');
      }

      session()->remove('cart');

      $msg = ($paymentMethod === 'card')
           ? '¡Pago acreditado! Tu pedido está en preparación.'
           : 'Pedido Registrado. Abona al recibir/retirar para completar la compra.';

      return redirect()->to('/orders')->with('success', $msg);
      
    } catch (\Exception $e) {
      return redirect()->to('/cart')->with('error', 'Error en la compra: ' . $e->getMessage());
    }
  }
}