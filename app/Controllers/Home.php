<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/layouts/header');
        echo view('/home');
        echo view('/layouts/footer');
    }
}
