<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AdminUserController extends Controller
{
  public function index() {
    $userModel = new UserModel();
    $users = $userModel->findAll();
    echo view('admin_users', ['users' => $users]);
  }

  public function changeRole($id) {
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if (!$user) {
      return redirect()->back()->with('error', 'Usuario no encontrado');
    }

    $newRole = $user['role'] === 'admin' ? 'cliente' : 'admin';
    $userModel->update($id, ['role' => $newRole]);
    return redirect()->back()->with('success', 'Rol actualizado.');
  }

  public function toggleActive($id) {
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if (!$user) {
      return redirect()->back()->with('error', 'Usuario no encontrado.');
    }

    if ($user['id'] == session('user_id')) {
      return redirect()->back()->with('error', 'No puedes desactivar tu propia cuenta.');
    }

    $newStatus = isset($user['is_active']) && $user['is_active'] ? 0 : 1;
    $userModel->update($id, ['is_active' => $newStatus]);
    return redirect()->back()->with('success', 'Estado actualizado.');
  }
}