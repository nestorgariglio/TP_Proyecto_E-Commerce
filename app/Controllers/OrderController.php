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
    $orders = $orderModel
      ->where('user_id', session('user_id'))
      ->orderBy('created_at', 'DESC')
      ->findAll();

    echo view('orders', ['orders' => $orders]);
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

    $db = \Config\Database::connect();
    $productModel = new ProductModel();
    $orderModel = new OrderModel();
    $orderItemModel = new OrderItemModel();

    $db->transStart();

    try {
      $total = 0;

      foreach($cart as $item) {
        $total += $item['price'] * $item['quantity'];
      }

      $orderId = $orderModel->insert([
        'user_id' => session('user_id'),
        'total' => $total,
        'status' => 'Pagado'
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
      return redirect()->to('/orders')->with('success', '¡Compra realizada con éxito!');
    } catch (\Exception $e) {
      return redirect()->to('/cart')->with('error', 'Error en la compra: ' . $e->getMessage());
    }
  }
}