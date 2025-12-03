<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class CartController extends Controller
{
  public function index() {
    $cart = session()->get('cart') ?? [];
    echo view('cart', ['cart' => $cart]);
  }

  public function add($productId) {
    $quantity = (int) ($this->request->getPost('quantity') ?: 1);
    $productModel = new ProductModel();
    $product = $productModel->find($productId);

    if (!$product) {
      return redirect()->back()->with('error', 'Producto no encontrado.');
    }

    if ($quantity < 1) {
      return redirect()->back()->with('error', 'La cantidad debe ser al menos 1');
    }

    $cart = session()->get('cart') ?? [];

    $currentQtyInCart  = isset($cart[$productId]) ? $cart[$productId]['quantity'] : 0;
    $totalDesired = $currentQtyInCart + $quantity;

    if ($totalDesired > $product['stock']) {
      return redirect()->back()->with('error', 'Stock insuficiente. Solo quedan ' . $product['stock']. ' unidades disponibles');
    }


    if (isset($cart[$productId])) {
      $cart[$productId]['quantity'] += $quantity;
    } else {
      $cart[$productId] = [
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'image' => $product['image'],
        'quantity' => $quantity,
      ];
    }

    session()->set('cart', $cart);
    return redirect()->to('/cart')->with('success', 'Producto agregado al carrito.');
  }

  public function update($productId)
  {
    $quantity = (int) $this->request->getPost('quantity');

    if ($quantity < 1) {
      return redirect()->to('/cart')->with('error', 'La cantidad mínima  es 1.');
    }

    $productModel = new ProductModel();
    $product = $productModel->find($productId);

    if ($quantity > $product['stock']) {
      return redirect()->to('/cart')->with('error', 'No puedes llevar más de lo que hay en stock ('. $product['stock'] .')');
    }

    $cart = session()->get('cart') ?? [];

    if (isset($cart[$productId])) {
      $cart[$productId]['quantity'] = max(1, $quantity);
      session()->set('cart', $cart);
    }

    return redirect()->to('/cart');
  }

  public function remove($productId) {
    $cart = session()->get('cart') ?? [];
    if (isset($cart[$productId])) {
      unset($cart[$productId]);
      session()->set('cart', $cart);
    }

    return redirect()->to('/cart');
  }

  public function clear() {
      session()->remove('cart');
      return redirect()->to('/cart');
  }

}