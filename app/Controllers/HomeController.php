<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        echo view('/layouts/header');
        echo view('principal');
        echo view('/layouts/footer');
    }
}
