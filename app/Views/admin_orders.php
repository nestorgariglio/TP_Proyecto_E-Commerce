<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<section class="container" style="padding-top: 8rem;">
  <?php if(session('user_role') == 'admin') :?>
    <h2 class="fw-bold mb-4">Ventas Realizadas</h2>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($orders as $order): ?>
            <tr>
              <td><?= esc($order['id']) ?></td>
              <td><?= esc($order['user_name']) ?></td>
              <td><?= esc(date('Y-m-d', strtotime($order['created_at']))) ?></td>
              <td>$<?= esc($order['total']) ?></td>
              <td><?= esc($order['status']) ?></td>
              <td>
                <a href="<?= site_url('admin/orders/' . $order['id']) ?>" class="btn btn-sm btn-primary">Ver Detalle</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <div class="d-flex justify-content-center align-items-center mb-4">
      <div class="card p-3">
        <h3 class="fs-4 p-2">
          Usted no tiene acceso a este recurso.
        </h3>
        <a href="<?= site_url('/')?>" class="btn bg-primary-color text-white">Volver</a>
      </div>
    </div>
  <?php endif; ?>
</section>
<?= $this->endSection()?>