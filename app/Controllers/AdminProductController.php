<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class AdminProductController extends Controller
{

  // Protege todas las acciones para que solo el admin pueda tener acceso
  private function checkAdmin() {
    if(!session('isLoggedIn') || session('user_role') !== 'admin') {
      return redirect()->to('/')->with('error', 'Acceso denegado.');
    }
  }

  // Listado de productos
  public function index() {

    $this->checkAdmin();
    $productModel = new ProductModel();
    $products = $productModel->findAll();

    echo view('/layouts/header');
    echo view('admin_products', ['products' => $products]);
    echo view('/layouts/footer');
  }

  // Formulario para agregar producto
  public function create() {

    $this->checkAdmin();
    echo view('/layouts/header');
    echo view('admin_product_form');
    echo view('/layouts/footer');
  }

  // Guarda el producto
  public function save() {
    $this->checkAdmin();
    $productModel = new ProductModel();
    $data = $this->request->getPost();

    // Acá manejo la imagen
    $imageUrl = $this->request->getPost('image');
    $imageFile = $this->request->getFile('image_file');

    if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {

      // Obtiene el nombre temporal del archivo que fue guardado por php
      $cloudinaryUrl = $this->uploadToCloudinary($imageFile->getTempName());

      if ($cloudinaryUrl) {
        $data['image'] = $cloudinaryUrl;
      } elseif (!in_array($imageFile->getMimeType(), ['image/jpeg', 'image/png', 'image/webp'])) {
        return redirect()->back()->with('error', 'Solo se permiten imágenes JPG, PNG o WEBP.');
      } elseif ($imageFile->getSize() > 5 * 1024 * 1024) {
          return redirect()->back()->with('error', 'La imagen no debe superar los 2MB.');
      } else {
        return redirect()->back()->with('error', 'Error al subir la imagen a Cloudinary.');
      }

    } elseif ($imageUrl) {
      $data['image'] = $imageUrl;
    } else {
      return redirect()->back()->with('error', 'Debe subir una imagen o ingresar una URL.');
    }

    $productModel->insert($data);
    return redirect()->to('/admin-products')->with('success', 'Producto agregado.');
  }

  // Subir la imagen a cloudinary
  private function uploadToCloudinary($filePath) {
    $cloudName = 'dzv36wzmx';
    $uploadPreset = 'quelac_unsigned';

    $url = "https://api.cloudinary.com/v1_1/$cloudName/image/upload";
    $postFields = [
      'file' => new \CURLFile($filePath),
      'upload_preset' => $uploadPreset,
    ];

    // Arma la solicitud http (usando la libreria curl)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);


    $result = curl_exec($ch);
    curl_close($ch);

    // Acá transforma la respuesta de json a un array
    $resultData = json_decode($result, true);
    return $resultData['secure_url' ?? null];
  }

  // Formulario de edición
  public function edit($id) {
    $this->checkAdmin();
    $productModel = new ProductModel();
    $product = $productModel->find($id);


    echo view('/layouts/header');
    echo view('admin_product_form', ['product' => $product]);
    echo view('/layouts/footer');
  }

  // Actualizar el producto
  public function update($id) {

    $this->checkAdmin();
    $productModel = new ProductModel();
    $data = $this->request->getPost();
    $productModel->update($id, $data);
    return redirect()->to('/admin-products')->with('success', 'Producto actualizado.');
  }

  // Dar de baja (soft delete)
  public function delete($id) {
    $this->checkAdmin();
    $productModel = new ProductModel();
    $productModel->update($id, ['is_active' => 0]);
    return redirect()->to('/admin-products')->with('success', 'Producto dado de baja.');
  }

  // Dar de alta (volver a activar)
  public function active($id) {
    $this->checkAdmin();
    $productModel = new ProductModel();
    $product = $productModel->find($id);

    if (!$product) {
      return redirect()->to('/admin-products')->with('error', 'Producto no encontrado.');
    }
    if ($product['stock'] <= 0) {
      return redirect()->to('/admin-products')->with('error', 'No se puede activar un producto sin stock.');
    }
    
    $productModel->update($id, ['is_active' => 1]);
    return redirect()->to('/admin-products')->with('success', 'Producto dado de alta.');
  }

}