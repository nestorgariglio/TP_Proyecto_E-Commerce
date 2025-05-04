<?php

namespace App\Controllers;

class TermsController extends BaseController{
  public function index()
  {
    echo view('/layouts/header');
    echo view('terms_and_use');
    echo view('/layouts/footer');    
  }
}