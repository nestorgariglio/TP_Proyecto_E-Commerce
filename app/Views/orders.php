<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Mis Compras | Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <h2 class="fw-bold mb-4">Mis Compras</h2>
    <!-- Si no hay compras -->
    <!-- <div class="alert alert-info">Aún no has realizado compras.</div> -->

    <!-- Tabla de comprobantes -->
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de comprobante, reemplaza por un foreach PHP -->
          <tr>
            <td>1</td>
            <td>2025-06-23</td>
            <td>$2.500</td>
            <td><span class="badge bg-success">Pagado</span></td>
            <td>
              <a href="<?= site_url('orders/1') ?>" class="btn btn-sm btn-primary" style="background-color: #cf172e;">Ver Detalle</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>2025-06-20</td>
            <td>$1.200</td>
            <td><span class="badge bg-secondary">Pendiente</span></td>
            <td>
              <a href="<?= site_url('orders/2') ?>" class="btn btn-sm btn-primary" style="background-color: #cf172e;">Ver Detalle</a>
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