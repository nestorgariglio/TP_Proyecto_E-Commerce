<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name', 'description', 'price', 'image', 'category', 'stock', 'is_active'];
  
  protected $useTimestamps = true;
  protected $returnType = 'array';
}
