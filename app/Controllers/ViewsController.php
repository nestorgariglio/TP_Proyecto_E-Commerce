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

  public function cart() {
    echo view('/layouts/header');
    echo view('cart');
    echo view('/layouts/footer');
  }

  public function orders() {
    echo view('/layouts/header');
    echo view('orders');
    echo view('/layouts/footer');
  }

  public function order_detail(/*$id*/) {
    echo view('/layouts/header');
    echo view('order_detail');
    // Uncomment the line below if you want to pass an ID to the view
    // $id = 1; // Example ID, replace with actual logic to get the order ID
    // echo view('order_detail', ['id' => $id]);
    echo view('/layouts/footer');
  }

  public function adminProducts() {
    echo view('/layouts/header');
    echo view('admin_products');
    echo view('/layouts/footer');
  }

  public function adminProductForm(/*$productId = null*/) {
    echo view('/layouts/header');
    echo view('admin_product_form', [
      // Uncomment the line below if you want to pass a product ID to the view
      // 'product' => $this->getProductById($productId) // Example function to get product data
    ]);
    echo view('/layouts/footer');
  }
}