<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Detalle de Orden | Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <h2 class="fw-bold mb-4">Detalle de Orden</h2>
    <!-- Datos generales de la orden -->
    <div class="row mb-4">
      <div class="col-12 col-md-6">
        <div class="mb-2"><strong>Número de orden:</strong> #1</div>
        <div class="mb-2"><strong>Fecha:</strong> 2025-06-23</div>
        <div class="mb-2"><strong>Estado:</strong> <span class="badge bg-success">Pagado</span></div>
      </div>
      <div class="col-12 col-md-6">
        <div class="mb-2"><strong>Total:</strong> <span style="color: #cf172e;" class="fw-bold">$2.500</span></div>
        <div class="mb-2"><strong>Método de pago:</strong> Tarjeta de crédito</div>
      </div>
    </div>
    <!-- Productos de la orden -->
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Producto</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de producto, reemplaza por un foreach PHP -->
          <tr>
            <td class="d-flex align-items-center gap-3">
              <img src="<?= base_url('assets/img/queso-ejemplo.jpg') ?>" alt="Queso Ejemplo" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
              <span>Queso Ejemplo</span>
            </td>
            <td class="text-center">$999</td>
            <td class="text-center">2</td>
            <td class="text-center">$1.998</td>
          </tr>
          <tr>
            <td class="d-flex align-items-center gap-3">
              <img src="<?= base_url('assets/img/fiambre-ejemplo.jpg') ?>" alt="Fiambre Ejemplo" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
              <span>Fiambre Ejemplo</span>
            </td>
            <td class="text-center">$502</td>
            <td class="text-center">1</td>
            <td class="text-center">$502</td>
          </tr>
          <!-- Fin ejemplo, repite o reemplaza por loop PHP -->
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-end fw-bold">Total:</td>
            <td class="text-center fw-bold" style="color: #cf172e;">$2.500</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="mt-4">
      <a href="<?= site_url('orders') ?>" class="btn btn-outline-secondary">Volver a mis compras</a>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>