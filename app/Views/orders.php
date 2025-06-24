<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <h2 class="fw-bold mb-4">Mis Compras</h2>

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
<?= $this->endSection()?>