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

    echo view ('/layouts/header');
    echo view ('checkout', ['cart' => $cart]);
    echo view ('/layouts/footer');
  }

  public function process() {

    $cart = session()->get('cart') ?? [];
    if (empty($cart)) {
      return redirect()->to('/cart')->with('error', 'El carrito está vacío.');
    }

    if (!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para comprar');
    }

    $userId = session('user_id');
    $total = 0;
    foreach ($cart as $item) {
      $total += $item['price'] * $item['quantity'];
    }

    $orderModel = new OrderModel();
    $orderItemModel = new OrderItemModel();

    $orderId = $orderModel->insert([
      'user_id' => $userId,
      'total' => $total,
      'status' => 'Pagado'
    ], true);

    foreach ($cart as $item) {
      $orderItemModel->insert([
        'order_id' => $orderId,
        'product_id' => $item['id'],
        'name' => $item['name'],
        'price' => $item['price'],
        'quantity' => $item['quantity'],
      ]);
    }

    session()->remove('cart');

    return redirect()->to('/orders')->with('succes', '¡Compra realizada con éxito!');
  }

  public function list() {
    if (!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para ver tus compras.');
    }

    $orderModel = new \App\Models\OrderModel();
    $orders = $orderModel
      ->where('user_id', session('user_id'))
      ->orderBy('created_at', 'DESC')
      ->findAll();

    echo view('/layouts/header');
    echo view('orders', ['orders' => $orders]);
    echo view('/layouts/footer');
  }

  public function detail($orderId) {
    
    if(!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debes iniciar sesión para ver tus comprobantes');
    }

    $orderModel = new \App\Models\OrderModel();
    $orderItemModel = new \App\Models\OrderItemModel();

    $order = $orderModel
      ->where('id', $orderId)
      ->where('user_id', session('user_id'))
      ->first();

    if (!$order) {
      return redirect()->to('/orders')->with('error', 'Orden no encontrada.');
    }

    $items = $orderItemModel
      ->where('id', $orderId)
      ->first();
    
    if (!$order) {
      return redirect()->to('/orders')->with('error', 'Orden no encontrada.');
    }

    $items = $orderItemModel->where('order_id', $orderId)->findAll();

    echo view('/layouts/header');
    echo view('order_detail', [
      'order' => $order,
      'items' => $items,
    ]);
    echo view('/layouts/footer');
  }
}