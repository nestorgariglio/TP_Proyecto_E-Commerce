<?php

namespace App\Controllers;

class CommercializationController extends BaseController
{
  public function index() {
    echo view('/layouts/header');
    echo view('commercialization');
    echo view('/layouts/footer');
  }
}