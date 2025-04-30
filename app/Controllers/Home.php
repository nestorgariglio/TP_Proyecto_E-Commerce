<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/layouts/header');
        echo view('/principal');
        echo view('about');
        echo view('commercialization');
        echo view('contact');
        echo view('terms_and_use');
        echo view('/layouts/footer');
    }
}
