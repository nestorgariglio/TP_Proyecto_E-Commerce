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
      'is_verified' => 0,
      'verify_token' => bin2hex(random_bytes(32)),
    ];

    // Validación simple
    if ($userModel->where('email', $data['email'])->first()) {
      return redirect()->back()->with('error', 'El email ya está registrado.');
    }

    $userModel->insert($data);

    $this->sendVerificationEmail($data['email'], $data['verify_token']);

    return redirect()->to('/login')->with('success', 'Registro exitoso. Por favor, verifique su email.');
  }

  private function sendVerificationEmail($email, $token) {
    $emailService = \Config\Services::email();
    $emailService->setTo($email);
    $emailService->setFrom('quelac@outlook.com.ar', 'Quelac');
    $emailService->setSubject('Verifica tu cuenta en Quelac');

    $link = base_url('verify/' . $token);
    $message = "¡Gracias por registrarte en Quelac!<br>Por favor, haz click en el siguiente enlace para verificar tu cuenta:<br><a href='$link'>link</a>";
    
    $emailService->setMessage($message);
    $emailService->send();
  }

  public function verify($token) {
    $userModel = new UserModel();
    $user = $userModel->where('verify_token', $token)->first();

    if (!$user) {
      return redirect()->to('/login')->with('error', 'Token inválido.');
    }

    $userModel->update($user['id'], [
      'is_verified' => 1,
      'verify_token' => null
    ]);

    return redirect()->to('/login')->with('success', '!Cuenta verificada¡ Ya puedes iniciar sesión.');
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
      if (!$user['is_verified']) {
        return redirect()->to('/login')->with('error', 'Debes verificar tu email antes de iniciar sesión');
      }
      session()->set([
        'user_id' => $user['id'],
        'user_name' => $user['name'],
        'user_role' => $user['role'],
        'isLoggedIn' => true,
      ]);
      return redirect()->to('/')->with('success', 'Inicio de sesión exitoso.');
    } else {
      return redirect()->to('/login')->with('error', 'Credenciales incorrectas. Por favor, intente de nuevo.');
    }
  }

  public function logout() {
    session()->destroy();
    return redirect()->to('/');
  }
}
