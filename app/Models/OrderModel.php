<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
  protected $table = 'orders';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'user_id', 
    'total', 
    'status',
    'payment_method',
    'shipping_method',
    'shipping_address',
    'shipping_cost', 
    'created_at', 
    'updated_at'  
  ];

  protected  $useTimestamps = true;
  protected $returnType = 'array';

  public function getOrdersWithUser() {
    return $this->select('orders.*, users.name as user_name')
                ->join('users', 'users.id = orders.user_id')
                ->orderBy('orders.created_at', 'DESC')
                ->findAll();
  }
}