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
    $fromDate = $this->request->getGet('from');
    $toDate = $this->request->getGet('to');

    $builder = $orderModel->select('orders.*, users.name as user_name')
                          ->join('users', 'users.id = orders.user_id')
                          ->orderBy('orders.created_at', 'DESC');

    if ($fromDate && $toDate) {
      $builder->where('orders.created_at >=', $fromDate . ' 00:00:00')
              ->where('orders.created_at <=', $toDate . ' 23:59:59');
    }

    $orders = $builder->findAll();

    echo view('admin_orders', [
      'orders'  => $orders,
      'from'    => $fromDate,
      'to'      => $toDate
    ]);
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

  public function confirmPayment($orderId){ 
    $orderModel = new OrderModel();
    $order = $orderModel->find($orderId);

    if (!$order) {
      return redirect()->back()->with('error', 'Orden no encontrada');
    }

    if ($order['status'] !== 'Pendiente') {
      return redirect()->back()->with('error', 'Esta orden ya está pagada o cancelada.');
    }

    $orderModel->update($orderId, ['status' => 'Pagado']);

    return redirect()->back()->with('success', 'Pagon confirmado. La orden ahora está completa.');
  }

}