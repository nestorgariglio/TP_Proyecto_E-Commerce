<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Administrar Productos | Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold">Administrar Productos</h2>
      <a href="<?= site_url('admin/products/create') ?>" class="btn btn-success">Agregar Producto</a>
    </div>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de producto, reemplaza por un foreach PHP -->
          <tr>
            <td>1</td>
            <td>
              <img src="https://res.cloudinary.com/demo/image/upload/sample.jpg" alt="Queso Ejemplo" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
            </td>
            <td>Queso Ejemplo</td>
            <td>Quesos</td>
            <td>$999</td>
            <td>10</td>
            <td>
              <span class="badge bg-success">Activo</span>
              <!-- Si está inactivo: <span class="badge bg-secondary">Inactivo</span> -->
            </td>
            <td>
              <a href="<?= site_url('admin/products/edit/1') ?>" class="btn btn-sm btn-primary">Editar</a>
              <form action="<?= site_url('admin/products/delete/1') ?>" method="post" class="d-inline">
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Dar de baja este producto?')">Dar de baja</button>
              </form>
            </td>
          </tr>
          <!-- Fin ejemplo, repite o reemplaza por loop PHP -->
        </tbody>
      </table>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>