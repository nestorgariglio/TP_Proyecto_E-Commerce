<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderItemModel;
use App\Models\UserModel;
use CodeIgniter\Controller;


class AdminOrderController extends Controller
{
  public function index() {
    $orderModel = new OrderModel();
    $orders = $orderModel->getOrdersWithUser();

    echo view('admin_orders', ['orders' => $orders]);
  }


  public function detail($orderId) {
    $orderModel = new OrderModel();
    $orderItemModel = new OrderItemModel();
    $userModel = new UserModel();

    $order = $orderModel->find($orderId);

    if (!$order) {
      return redirect()->to('/admin/orders')->with('error', 'Orden no encontrada.');
    }

    $items = $orderItemModel->where('order_id', $orderId)->findAll();
    $user = $userModel->find($order['user_id']);

    echo view('admin_order_detail', [
      'order' => $order,
      'items' => $items,
      'user' => $user,
    ]);
  }

}