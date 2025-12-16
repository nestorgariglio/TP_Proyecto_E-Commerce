<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ContactController extends Controller {
  public function sendContact() {
    $rules = [
      'name'    => 'required|min_length[3]',
      'email'   => 'required|valid_email',
      'message' => 'required|min_length[10]'
    ];

    if (!$this->validate($rules)) {
      return redirect()->back()->withInput()->with('error', 'Por favor complete todos los campos correctamente.');
    }

    $emailService = \Config\Services::email();

    $name = $this->request->getPost('name');
    $userEmail = $this->request->getPost('email');
    $messageContent = $this->request->getPost('message');

    $emailService->setFrom('quelac.contact@gmail.com', 'Quelac Web Form');
    $emailService->setTo('quelac.contact@gmail.com');
    $emailService->setReplyTo($userEmail, $name);
    $emailService->setSubject('Nuevo Mensaje de Contacto: ' . $name);

    $body = "
        <h3>Has recibido un nuevo mensaje desde la web.</h3>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $userEmail</p>
        <hr>
        <p><strong>Mensaje:</strong></p>
        <p>$messageContent</p>
    ";

    $emailService->setMessage($body);

    if ($emailService->send()) {
      return redirect()->to('/contact')->with('success', '¡Mesaje enviado! Nos pondremos en contacto pronto.');
    } else {
      return redirect()->back()->withInput()->with('error', 'Hubo un problema al enviar el mensaje. Intente más tarde.' . $emailService->printDebugger(['headers']));
    }
  }
}