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
    $rules = [
      'name'            => 'required|min_length[3]',
      'email'           => 'required|valid_email|is_unique[users.email]',
      'password'        => 'required|min_length[8]',
      'confirmPassword' => 'required|matches[password]',
      'terms'           => 'required'
    ];

    $messages = [
      'name' => [
        'required'      => 'El nombre es obligatorio.',
        'min_length[3]' => 'El nombre debe tener al menos 3 caracteres.',
      ],
      'email' => [
        'required'    => 'El email es obligatorio.',
        'valid_email' => 'Ingresa un email válido (ej: nombre@gmail.com).',
        'is_unique'   => 'Este email ya está registrado.'
      ],
      'password' => [
        'required'      => 'La contraseña es obligatoria.',
        'min_length[8]' => 'La contraseña debe tener al menos 8 caracteres.',
      ],
      'confirmPassword' => [
        'required'  => 'Debe confirmar su contraseña.',
        'matches'   => 'Las contraseñas no coinciden'
      ],
      'terms' => [
        'required'  => 'Debe aceptar los términos y condiciones.'
      ]
    ];

    if (!$this->validate($rules, $messages)) return redirect()->back()->withInput()->with('errors', $this->validator->getErrors()); 

    $userModel = new UserModel();
    $userData = [
      'name'      => $this->request->getPost('name'),
      'email'     => $this->request->getPost('email'),
      'password'  => $this->request->getPost('password'),
    ];

    $registeredData = $userModel->registerUser($userData);

    if ($registeredData) {
      $this->sendVerificationEmail($registeredData['email'], $registeredData['verify_token']);
      return redirect()->to('/login')->with('success', 'Registro exitoso. Por favor, verifique su email.');
    } else {
      return redirect()->back()->with('error', 'Hubo un problema al registrar la cuenta.');
    }
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
    $rules = [
      'email'           => 'required|valid_email|is_unique[users.email]',
      'password'        => 'required|min_length[8]',
    ];

    $messages = [
      'email' => [
        'required'    => 'El email es obligatorio.',
        'valid_email' => 'Ingresa un email válido (ej: nombre@gmail.com).',
        'is_unique'   => 'Este email ya está registrado.'
      ],
      'password' => [
        'required'      => 'La contraseña es obligatoria.',
        'min_length[8]' => 'La contraseña debe tener al menos 8 caracteres.',
      ],
    ];

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
    } else if (!$this->validate($rules, $messages)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }
    return redirect()->to('/login')->with('error', 'Credenciales incorrectas. Por favor, intente de nuevo.');
  }

  public function logout() {
    session()->destroy();
    return redirect()->to('/');
  }

  public function profile() {
    if (!session('isLoggedIn')) return redirect()->to('/login');

    $userModel = new UserModel();
    $user = $userModel->find(session('user_id'));

    return view('profile', ['user' => $user]);
  }

  public function updateProfile() {
    if (!session('isLoggedIn')) return redirect()->to('/login');

    $userId = session('user_id');
    $userModel = new UserModel();

    $rules = [
      'name' => 'required|min_length[3]'
    ];

    $messages = [
      'name' => [
        'required'    => 'El nombre es requerido.',
        'min_length'  => 'El nombre debe tener al menos 3 caracteres.'
      ],
      'password' => [
        'min_length'  => 'La contraseña debe tener al menos 8 caracteres.'
      ],
      'confirm_password' => [
        'matches' => 'Las contraseñas deben ser iguales.'
      ]
    ];

    $newPass = $this->request->getPost('password');
    if (!empty($newPass)) {
      $rules['password'] = 'min_length[8]';
      $rules['confirm_password'] = 'matches[password]';
    }

    if (!$this->validate($rules, $messages)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
      'name'  => $this->request->getPost('name')
    ];

    if (!empty($newPass)) {
      $data['password'] = password_hash($newPass, PASSWORD_BCRYPT);
    }

    $userModel->update($userId, $data);

    session()->set('user_name', $data['name']);

    return redirect()->to('/profile')->with('success', 'Datos actualizados correctamente.');
  }
}
