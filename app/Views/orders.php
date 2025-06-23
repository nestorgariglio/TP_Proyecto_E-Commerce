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
        <?php if (!empty($orders)): ?>
          <?php foreach ($orders as $order): ?>
            <tr>
              <td><?= esc($order['id'])?></td>
              <td><?= date('Y-m-d', strtotime($order['created_at'])) ?></td>
              <td><?= esc($order['total'])?></td>
              <td>
                <?php if ($order['status'] === 'Pagado'): ?>
                  <span class="badge bg-success">Pagado</span>
                <?php else: ?>
                  <span class="badge bg-secondary"><?= esc($order['status'])?></span>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= site_url('orders/' . $order['id']) ?>" class="btn btn-sm btn-primary" style="background-color: #cf172e;">Ver Detalle</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="5" class="text-center">Aún no has realizado compras.</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>