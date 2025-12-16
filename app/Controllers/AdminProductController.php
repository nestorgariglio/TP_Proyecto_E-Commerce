<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;
use App\Libraries\CloudinaryService;

class AdminProductController extends Controller
{
  // Listado de productos
  public function index() {
    $productModel = new ProductModel();
    $products = $productModel->findAll();
    echo view('admin_products', ['products' => $products]);
  }

  // Formulario para agregar producto
  public function create() {
    echo view('admin_product_form');
  }

  // Formulario de edición
  public function edit($id) {
    $productModel = new ProductModel();
    $product = $productModel->find($id);

    if (!$product) return redirect()->to('/admin/products')->with('error', 'Producto no encontrado');

    echo view('admin_product_form', ['product' => $product]);
  }

  // Guarda el producto
  public function save($id = null) {
    $rules = [
      'name'        => 'required|min_length[3]',
      'description' => 'required',
      'price'       => 'required|numeric',
      'stock'       => 'required|integer',
      'category'    => 'required'
    ];

    $messages = [
      'name' => [
        'required'    => 'El nombre es obligatorio.',
        'min_length'  => 'El nombre debe tener al menos 3 caracteres.'
      ],
      'description' => [
        'required'  => 'La descripción es obligatoria.',
      ],
      'price' => [
        'required'  => 'El precio es obligatorio.',
        'numeric'   => 'El precio debe contener solo números.'
      ],
      'stock' => [
        'required'  => 'El stock es obligatorio.',
        'interger'  => 'El stock debe contener solo números enteros.'
      ],
      'category' => [
        'required'  => 'Selecciona una categoría.'
      ]
    ];

    if ($this->request->getFile('image_file')->isValid()) {
      $rules['image_file'] = 'is_image[image_file]|max_size[image_file,2048]';
    }

    if (!$this->validate($rules, $messages)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $productModel = new ProductModel();

    $data = [
      'name' => $this->request->getPost('name'),
      'description' => $this->request->getPost('description'),
      'price' => $this->request->getPost('price'),
      'stock' => $this->request->getPost('stock'),
      'category' => $this->request->getPost('category'),
      'is_active' => $this->request->getPost('is_active'),
    ];

    $imageFile = $this->request->getFile('image_file');
    $imageUrl = $this->request->getPost('image');


    if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
      $cloudinary = new CloudinaryService();
      $cloudinaryUrl = $cloudinary->upload($imageFile->getTempName());
      if ($cloudinaryUrl) {
        $data['image'] = $cloudinaryUrl;
      } else {
        return redirect()->back()->withInput()->with('error', 'Error al subir imagen.');
      }
    } else if(!empty($imageUrl)){
      $data['image'] = $imageUrl;
    } else if($id === null){
      return redirect()->back()->withInput()->with('error', 'Debe subir una imagen para un producto nuevo.');
    }

    if ($id) {
      $productModel->update($id, $data);
      $messagge = 'Producto actualizado correctamente.';
    } else {
      $productModel->insert($data);
      $messagge = 'Producto creado correctamente.';
    }

    return redirect()->to('/admin/products')->with('success', $messagge);
  }

  public function update($id) {
    return $this->save($id);
  }

  // Dar de baja (soft delete)
  public function delete($id) {
    $productModel = new ProductModel();
    $productModel->update($id, ['is_active' => 0]);
    return redirect()->to('/admin/products')->with('success', 'Producto dado de baja.');
  }

  // Dar de alta (volver a activar)
  public function active($id) {
    $productModel = new ProductModel();
    $product = $productModel->find($id);

    if (!$product) {
      return redirect()->to('/admin/products')->with('error', 'Producto no encontrado.');
    }
    if ($product['stock'] <= 0) {
      return redirect()->to('/admin/products')->with('error', 'No se puede activar un producto sin stock.');
    }
    
    $productModel->update($id, ['is_active' => 1]);
    return redirect()->to('/admin/products')->with('success', 'Producto dado de alta.');
  }

}