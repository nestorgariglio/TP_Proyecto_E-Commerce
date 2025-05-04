<?php

namespace App\Controllers;

class ContactController extends BaseController
{
  public function index()
  {
    echo view('/layouts/header');
    echo view('contact');
    echo view('/layouts/footer');
  }
}