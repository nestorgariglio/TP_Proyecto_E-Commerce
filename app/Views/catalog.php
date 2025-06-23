<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Quelac</title>
</head>
<body>
  <section class="container-fluid d-flex flex-column align-items-center p-0 m-0" style="padding-top: 10rem;">
    <div class="container">
      <!-- Filtros -->
      <form method="get" class="row g-2 mb-4">
        <div class="col-12 col-md-4">
          <input type="text" name="q" class="form-control" placeholder="Buscar producto...">
        </div>
        <div class="col-12 col-md-4">
          <select name="category" class="form-select">
            <option value="">Todas las categorías</option>
            <option value="Queso">Quesos</option>
            <option value="Fiambre">Fiambres</option>
          </select>
        </div>
        <div class="col-12 col-md-4">
          <button type="submit" class="btn btn-primary w-100" style="background-color: #cf172e;">Filtrar</button>
        </div>
      </form>
      <!-- Grilla de productos -->
      <div class="row g-4">
        <!-- Ejemplo de producto, reemplaza por un foreach PHP -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= base_url('assets/img/queso-ejemplo.jpg') ?>" class="card-img-top img-fluid" alt="Queso Ejemplo">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Queso Ejemplo</h5>
              <p class="card-text">Queso artesanal de vaca, sabor suave y textura cremosa.</p>
              <span class="fw-bold mb-2">$999</span>
              <a href="<?= site_url('products/1') ?>" class="btn btn-primary mt-auto" style="background-color: #cf172e;">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= base_url('assets/img/fiambre-ejemplo.jpg') ?>" class="card-img-top img-fluid" alt="Fiambre Ejemplo">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Fiambre Ejemplo</h5>
              <p class="card-text">Fiambre artesanal, ideal para picadas y tablas.</p>
              <span class="fw-bold mb-2">$850</span>
              <a href="<?= site_url('products/2') ?>" class="btn btn-primary mt-auto" style="background-color: #cf172e;">Ver Detalles</a>
            </div>
          </div>
        </div>
        <!-- Fin ejemplo, repite o reemplaza por loop PHP -->
      </div>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>