<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model
{
  protected $table = 'orders';
  protected $primaryKey = 'id';
  protected $allowedFields = ['user_id', 'total', 'status', 'created_at', 'updated_at'];

  protected  $useTimestamps = true;
  protected $returnType = 'array';
}