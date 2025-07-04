<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <?php if(session('user_role') == 'admin') :?>
    <h2 class="fw-bold mb-4">Detalle de Orden</h2>

    <!-- Datos generales de la orden -->
    <div class="row mb-4">
      <div class="col-12 col-md-6">
        <div class="mb-2"><strong>Número de orden:</strong> #<?= esc($order['id']) ?></div>
        <div class="mb-2"><strong>Fecha:</strong> <?= date('Y-m-d', strtotime($order['created_at'])) ?></div>
        <div class="mb-2"><strong>Usuario:</strong> <?= esc($user['name'])?></div>
        <div class="mb-2"><strong>Email:</strong> <?= esc($user['email'])?></div>
      </div>
      <div class="col-12 col-md-6">
        <div class="mb-2"><strong>Total:</strong> <span style="color: #cf172e;" class="fw-bold">$<?= esc($order['total']) ?></span></div>
        <div class="mb-2"><strong>Método de pago:</strong> <?= esc($order['status']) ?></div>
        <div class="mb-2"><strong>Estado:</strong>
          <?php if ($order['status'] === 'Pagado'): ?>
            <span class="badge bg-success">Pagado</span>
          <?php else: ?>
            <span class="badge bg-secondary"><?= esc($order['status']) ?></span>
          <?php endif; ?>        
        </div>
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
          <?php foreach ($items as $item): ?>
            <tr>
              <td><?= esc($item['name']) ?></td>
              <td class="text-center">$<?= esc($item['price']) ?></td>
              <td class="text-center"><?= esc($item['quantity']) ?></td>
              <td class="text-center">$<?= $item['price'] * $item['quantity'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-end fw-bold">Total:</td>
            <td class="text-center fw-bold" style="color: #cf172e;">$<?= esc($order['total']) ?></td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="mt-4">
      <a href="<?= site_url('admin/orders') ?>" class="btn btn-outline-secondary">Volver a ventas</a>
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