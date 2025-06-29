<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\UserModel;
use CodeIgniter\Controller;


class AdminOrderController extends Controller
{

  private function checkAdmin() {
    if (!session('isLoggedIn') || session('user_role') !== 'admin') {
      return redirect()->to('/')->with('error', 'Acceso denegado.');
    }
  }

  public function index() {
    $this->checkAdmin();
    $orderModel = new OrderModel();
    $userModel = new UserModel();
    $orders = $orderModel->orderBy('created_at', 'DESC')->findAll();

    foreach ($orders as &$order) {
      $user = $userModel->find($order['user_id']);
      $order['user_name'] = $user ? $user['name'] : 'Desconocido'; 
    }

    echo view('admin_orders', ['orders' => $orders]);
  }

  public function detail($orderId) {
    $this->checkAdmin();
    $orderModel = new OrderModel();
    $orderItemModel = new OrderItemModel();
    $userModel = new UserModel();

    $order = $orderModel->find($orderId);
    $items = $orderItemModel->where('order_id', $orderId)->findAll();
    $user = $userModel->find($order['user_id']);

    echo view('admin_order_detail', [
      'order' => $order,
      'items' => $items,
      'user' => $user,
    ]);
  }

}