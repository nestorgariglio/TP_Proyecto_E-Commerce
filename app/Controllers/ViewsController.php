<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ViewsController extends BaseController
{
  public function principal() {
    
    $featuredCategories = [
      [
        'title' => 'Quesos',
        'description' => 'Una selección de quesos maduros y frescos, con sabores únicos',
        'image' => 'https://res.cloudinary.com/dx7e5izqu/image/upload/v1765294132/cheese-category_jalmgs.jpg',
        'filter' => 'Queso'
      ],
      [
        'title' => 'Fiambres',
        'description' => 'Fiambres curados con técnicas tradicionales y aromas intensos.',
        'image' => 'https://res.cloudinary.com/dx7e5izqu/image/upload/v1765293810/salami-category_n874vn.jpg',
        'filter' => 'Fiambre'
      ],
      [
        'title' => 'Panificados',
        'description' => 'El acompañamiento perfecto, horneado diariamente para vos.',
        'image' => 'https://res.cloudinary.com/dx7e5izqu/image/upload/v1765293860/bread-category_pfvu0p.jpg',
        'filter' => 'Panificado'
      ]
    ];

    $productModel = new ProductModel();
    $featuredProducts = $productModel->where('is_active', 1)
                                     ->orderBy('RAND()')
                                     ->limit(4)
                                     ->findAll();
    return view('principal', [
      'categories' => $featuredCategories,
      'featuredProducts' => $featuredProducts
    ]);
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

  public function privacy() {
    echo view('privacy');
  }
}