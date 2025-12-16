<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ClientAuth implements FilterInterface {
  public function before(RequestInterface $req, $args = null) {
    if (session('user_role') === 'admin') {
      return redirect()->back()->with('error', 'Los administradores no pueden realizar esta acción. Cambie a cuenta cliente.');
    }

    if (!session('isLoggedIn')) {
      return redirect()->to('/login')->with('error', 'Debe iniciar sesión para realizar esta acción.');
    }
  }

  public function after(RequestInterface $req, ResponseInterface $res, $args = null) {}
}