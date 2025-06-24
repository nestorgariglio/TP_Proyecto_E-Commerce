<?php

namespace App\Controllers;

class ViewsController extends BaseController
{
  public function principal() {
    echo view('/layouts/header');
    echo view('principal');
    echo view('/layouts/footer');
  }

  public function about() {
    echo view('/layouts/header');
    echo view('about');
    echo view('/layouts/footer');
  }

  public function contact() {
    echo view('/layouts/header');
    echo view('contact');
    echo view('/layouts/footer');
  }

  public function terms() {
    echo view('/layouts/header');
    echo view('terms');
    echo view('/layouts/footer');
  }

  public function marketing() {
    echo view('/layouts/header');
    echo view('marketing');
    echo view('/layouts/footer');
  }

}