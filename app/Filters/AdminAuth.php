<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface 
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!session('isLoggedIn') || session('user_role') !== 'admin') {
      return redirect()->to('/')->with('error', 'Acceso restringido a adminitradores');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    //
  }
}