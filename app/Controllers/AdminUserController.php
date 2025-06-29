<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AdminUserController extends Controller
{
  private function checkAdmin() {
    if (!session('isLoggedIn') || session('user_role') !== 'admin') {
      return redirect()->to('/')->with('error', 'Acceso denegado.');
    }
  }

  public function index() {
    $this->checkAdmin();
    $userModel = new UserModel();
    $users = $userModel->findAll();
    echo view('admin_users', ['users' => $users]);
  }

  public function changeRole($id) {
    $this->checkAdmin();
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
    $this->checkAdmin();
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if (!$user) {
      return redirect()->back()->with('error', 'Usuario no encontrado.');
    }

    $newStatus = isset($user['is_active']) && $user['is_active'] ? 0 : 1;
    $userModel->update($id, ['is_active' => $newStatus]);
    return redirect()->back()->with('success', 'Estado actualizado.');
  }
}