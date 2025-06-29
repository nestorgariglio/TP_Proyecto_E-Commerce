<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';

  protected $allowedFields = ['name', 'email', 'password', 'role', 'is_active', 'is_verified', 'verify_token'];
  protected $useTimestamps = true;

  // Para obtener solo los datos que necesitas
  protected $returnType = 'array';
}

