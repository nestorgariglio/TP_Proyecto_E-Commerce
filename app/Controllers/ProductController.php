<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{

  // Muestra el catálogo de productos con filtros de búsqueda y categoría
  public function catalog() {
    $productModel = new ProductModel();
    $q = $this->request->getGet('q');
    $category = $this->request->getGet('category');

    $builder = $productModel->where('is_active', 1); // Solo productos activos


    if ($q) {
      $builder->like('name', $q);
    }
    // Filtrar por categoría
    if ($category) {
      $builder->where('category', $category);
    }

    $products = $builder->findAll();

    echo view('catalog', ['products' => $products]);
  }

  // Muestra el detalle de un producto individual
  public function detail($id) {
    $productModel = new ProductModel();
    $product = $productModel->where('is_active', 1)->find($id);

    echo view('product', ['product' => $product]);
  }
}