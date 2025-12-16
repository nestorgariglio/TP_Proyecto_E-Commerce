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

    $messages = [
      'name' => [
        'required'      => 'El nombre es obligatorio.',
        'min_length[3]' => 'El nombre debe tener al menos 3 catacteres.',
      ],
      'email' => [
        'required'    => 'El email es obligatorio.',
        'valid_email' => 'Ingresa un email válido (ej: nombre@gmail.com).',
      ],
      'message' => [
        'required'    => 'El mensaje es obligatorio',
        'min_length'  => 'El mensaje debe tener al menos 10 caracteres.'
      ]
    ];

    if (!$this->validate($rules, $messages)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
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