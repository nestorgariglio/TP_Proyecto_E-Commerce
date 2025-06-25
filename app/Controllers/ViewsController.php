<?php

namespace App\Controllers;

class ViewsController extends BaseController
{
  public function principal() {
    echo view('principal');
  }

  public function about() {
    echo view('about');
  }

  public function contact() {
    echo view('contact');
  }

  public function terms() {
    echo view('terms');
  }

  public function marketing() {
    echo view('marketing');
  }

}