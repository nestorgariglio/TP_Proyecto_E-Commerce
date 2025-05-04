<?php

namespace App\Controllers;

class AboutController extends BaseController
{
  public function index(){
    echo view('/layouts/header');
    echo view('about');
    echo view('/layouts/footer');
  }
}