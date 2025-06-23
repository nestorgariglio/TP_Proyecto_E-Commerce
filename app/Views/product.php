<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Detalle de Producto | Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <div class="row g-5 align-items-center">
      <!-- Imagen del producto -->
      <div class="col-12 col-md-6 text-center">
        <img src="<?= base_url('assets/img/queso-ejemplo.jpg') ?>" alt="Queso Ejemplo" class="img-fluid rounded shadow" style="max-height: 350px;">
      </div>
      <!-- Detalles del producto -->
      <div class="col-12 col-md-6">
        <h1 class="fw-bold mb-3">Queso Ejemplo</h1>
        <span class="badge bg-secondary mb-2">Quesos</span>
        <p class="fs-5 mb-4">Queso artesanal de vaca, sabor suave y textura cremosa. Ideal para picadas y tablas.</p>
        <div class="mb-4">
          <span class="fw-bold fs-3" style="color: #cf172e;">$999</span>
        </div>
        <form method="post" action="<?= site_url('cart/add/1') ?>" class="d-flex flex-column gap-3">
          <div class="d-flex align-items-center gap-2">
            <label for="quantity" class="form-label mb-0">Cantidad:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control" style="width: 80px;">
          </div>
          <button type="submit" class="btn btn-lg text-white" style="background-color: #cf172e;">Agregar al Carrito</button>
        </form>
        <div class="mt-4">
          <h5 class="fw-bold">Detalles</h5>
          <ul>
            <li>Origen: Corrientes, Argentina</li>
            <li>Peso aproximado: 500g</li>
            <li>Conservación: Refrigerado</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>