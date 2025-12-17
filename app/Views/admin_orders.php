<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <h2 class="fw-bold mb-4">Gestión de Ventas</h2>

  <div class="card mb-4 border-0 shadow-sm bg-light">
    <div class="card-body py-3">
      <form method="get" class="row g-2 align-items-end">
        <div class="col-6 col-md-auto">
          <label class="form-label small fw-bold text-muted">Desde</label>
          <input type="date" name="from" class="form-control form-control-sm" value="<?= isset($from) ? $from : '' ?>">
        </div>
        <div class="col-6 col-md-auto">
          <label class="form-label small fw-bold text-muted">Hasta</label>
          <input type="date" name="to" class="form-control form-control-sm" value="<?= isset($to) ? $to : '' ?>">
        </div>
        <div class="col-12 col-md-auto d-flex gap-2">
          <button type="submit" class="btn btn-sm btn-primary flex-grow-1 flex-md-grow-0" style="background-color: #cf172e;">
            <i class="bi bi-filter"></i> Filtrar
          </button>
          <a href="<?= current_url() ?>" class="btn btn-sm btn-outline-secondary flex-grow-1 flex-md-grow-0">Limpiar</a>
        </div>
      </form>
    </div>
  </div>

  <div class="table-responsive d-none d-md-block">
    <table class="table align-middle table-hover">
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
            <td class="fw-bold"><?= esc($order['user_name']) ?></td>
            <td><?= esc(date('d/m/Y', strtotime($order['created_at']))) ?></td>
            <td>$<?= esc($order['total']) ?></td>
            <td>
                <?php if ($order['status'] === 'Pagado'): ?>
                  <span class="badge bg-success">Pagado</span>
                <?php else: ?>
                  <span class="badge bg-warning text-dark">Pendiente</span>
                <?php endif; ?>
            </td>
            <td>
              <a href="<?= site_url('admin/orders/' . $order['id']) ?>" class="btn btn-sm btn-primary">Ver Detalle</a>
              <?php if($order['status'] === 'Pendiente'): ?>
                <form action="<?= site_url('admin/orders/confirm-payment/' . $order['id']) ?>" method="post" class="d-inline">
                  <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('¿Confirmar pago?')">
                   ✔ Confirmar
                  </button>
                </form>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="d-md-none">
    <?php foreach($orders as $order): ?>
      <div class="card mb-3 border-0 shadow-sm">
        <div class="card-body p-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <span class="fw-bold text-dark">#<?= esc($order['id'])?></span>
                    <span class="text-muted mx-1">·</span>
                    <span class="text-dark small"><?= esc($order['user_name']) ?></span>
                </div>
                <small class="text-muted"><?= date('d/m/y', strtotime(esc($order['created_at']))) ?></small>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold m-0" style="color: #cf172e;">$<?= number_format($order['total'], 0, ',', '.') ?></h5>
                <?php if ($order['status'] === 'Pagado'): ?>
                    <span class="badge bg-success">Pagado</span>
                <?php else: ?>
                    <span class="badge bg-warning text-dark">Pendiente</span>
                <?php endif; ?>
            </div>

            <div class="d-grid gap-2">
                <a href="<?= site_url('admin/orders/' . $order['id']) ?>" class="btn btn-outline-primary btn-sm">
                    Ver Detalle
                </a>
                <?php if($order['status'] === 'Pendiente'): ?>
                  <form action="<?= site_url('admin/orders/confirm-payment/' . $order['id']) ?>" method="post" class="d-grid">
                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('¿Confirmar pago?')">
                      ✔ Confirmar Pago Recibido
                    </button>
                  </form>
                <?php endif; ?>
            </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</section>
<?= $this->endSection()?>