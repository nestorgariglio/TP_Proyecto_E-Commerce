<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{

  public function registerView() {
    return view('register');
  }

  public function register() {
    $userModel = new UserModel();
    $data = [
      'name' => $this->request->getPost('name'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
      'role' => 'cliente',
    ];

    // Validación simple
    if ($userModel->where('email', $data['email'])->first()) {
      return redirect()->back()->with('error', 'El email ya está registrado.');
    }

    $userModel->insert($data);
    return redirect()->to('/login')->with('success', 'Registro exitoso. Por favor, inicie sesión.');
  }

  public function loginView() {
    return view('login');
  } 
 
  public function login() {
    $userModel = new UserModel();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    
    $user = $userModel->where('email', $email)->first();

    if ($user && password_verify($password, $user['password'])) {
      session()->set([
        'user_id' => $user['id'],
        'user_name' => $user['name'],
        'user_role' => $user['role'],
        'isLoggedIn' => true,
      ]);
      return redirect()->to('/')->with('success', 'Inicio de sesión exitoso.');
    } else {
      return redirect()->back()->with('error', 'Credenciales incorrectas. Por favor, intente de nuevo.');
    }
  }

  public function logout() {
    session()->destroy();
    return redirect()->to('/');
  }
}
