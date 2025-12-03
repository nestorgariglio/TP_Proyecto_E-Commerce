<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';

  protected $allowedFields = ['name', 'email', 'password', 'role', 'is_active', 'is_verified', 'verify_token'];
  protected $useTimestamps = true;

  protected $returnType = 'array';

  public function registerUser(array $data) {
      $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
      $data['role'] = 'cliente';
      $data['is_active'] = 1;
      $data['is_verified'] = 0;
      $data['verify_token'] = bin2hex(random_bytes(64));

      if ($this->insert($data)) {
        return $data;
      }

      return false;
  }
}

