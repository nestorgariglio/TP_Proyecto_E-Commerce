<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class CartController extends Controller
{
  // Muestra el carrito de compras
  public function index() {
    $cart = session()->get('cart') ?? [];
    echo view('/layouts/header');
    echo view('cart', ['cart' => $cart]);
    echo view('/layouts/footer');
  }

  // Agrega un producto al carrito
  public function add($productId) {
    $quantity = $this->request->getPost('quantity') ?: 1;
    $productModel = new ProductModel();
    $product = $productModel->find($productId);

    if (!$product) {
      return redirect()->back()->with('error', 'Producto no encontrado.');
    }

    $cart = session()->get('cart') ?? [];

    // isset se usa para verificar si la clave existe en el array del carrito
    // y así evitar errores si el producto ya está en el carrito.
    // Si el producto ya está en el carrito, se incrementa la cantidad.
    // Si no está, se agrega con la cantidad especificada.
    // Esto permite que el carrito maneje múltiples cantidades del mismo producto.
    // Hay que asegurarse de que la cantidad sea un entero

    $quantity = (int) $quantity; 
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

  // Actualiza la cantidad de un producto en el carrito
  public function update($productId)
  {
    $quantity = (int) $this->request->getPost('quantity');
    $cart = session()->get('cart') ?? [];

    // isset es usado para verificar si la clave existe en el array del carrito
    // y así evitar errores si el producto no está en el carrito.
    // max(1, $quantity) asegura que la cantidad mínima sea 1.
    if (isset($cart[$productId])) {
      $cart[$productId]['quantity'] = max(1, $quantity);
      session()->set('cart', $cart);
    }

    return redirect()->to('/cart');
  }

  // Elimina un producto del carrito
  public function remove($productId) {
    $cart = session()->get('cart') ?? [];
    unset($cart[$productId]);
    session()->set('cart', $cart);

    return redirect()->to('/cart');
  }

  // Vacía el carrito
  public function clear() {
      session()->remove('cart');
      return redirect()->to('/cart');
  }

}