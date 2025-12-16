<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <h2 class="fw-bold mb-4">Mis Compras</h2>

  <div class="card mb-4 border-0 shadow-sm bg-light">
    <div class="card-body py-3">
      <form method="get" class="row g-2 align-items-end">
        <div class="col-6 col-md-auto">
          <label class="form-label small fw-bold text-muted">Desde</label>
          <input type="date" name="from" class="form-control form-control-sm" value="<?= isset($from) ? $from : '' ?>" required>
        </div>
        <div class="col-6 col-md-auto">
          <label class="form-label small fw-bold text-muted">Hasta</label>
          <input type="date" name="to" class="form-control form-control-sm" value="<?= isset($to) ? $to : '' ?>" required>
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
      <thead class="bg-light">
        <tr>
          <th>#Orden</th>
          <th>Fecha</th>
          <th>Total</th>
          <th>Estado</th>
          <th class="text-end">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($orders)): ?>
          <?php foreach ($orders as $order): ?>
            <tr>
              <td class="fw-bold">#<?= esc($order['id'])?></td>
              <td><?= date('d/m/Y', strtotime(esc($order['created_at']))) ?></td>
              <td class="fw-bold text-dark">$<?= number_format($order['total'], 0, ',', '.') ?></td>
              <td>
                <?php if ($order['status'] === 'Pagado'): ?>
                  <span class="badge rounded-pill bg-success">Pagado</span>
                <?php else: ?>
                  <span class="badge rounded-pill bg-warning text-dark">Pendiente</span>
                <?php endif; ?>
              </td>
              <td class="text-end">
                <a href="<?= site_url('orders/' . esc($order['id'])) ?>" class="btn btn-sm btn-outline-dark">
                  Ver Detalle <i class="bi bi-chevron-right"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="5" class="text-center py-5">Aún no has realizado compras en este período.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <div class="d-md-none">
    <?php if (!empty($orders)): ?>
      <?php foreach ($orders as $order): ?>
        <div class="card mb-3 border-0 shadow-sm">
          <div class="card-body p-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="fw-bold text-secondary">#<?= esc($order['id'])?></span>
                  <small class="text-muted"><?= date('d/m/Y', strtotime(esc($order['created_at']))) ?></small>
              </div>
              
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="fw-bold m-0" style="color: #cf172e;">$<?= number_format($order['total'], 0, ',', '.') ?></h5>
                  <?php if ($order['status'] === 'Pagado'): ?>
                      <span class="badge rounded-pill bg-success">Pagado</span>
                  <?php else: ?>
                      <span class="badge rounded-pill bg-warning text-dark">Pendiente</span>
                  <?php endif; ?>
              </div>

              <div class="d-grid">
                  <a href="<?= site_url('orders/' . esc($order['id'])) ?>" class="btn btn-outline-dark btn-sm">
                      Ver Detalle de Compra
                  </a>
              </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="text-center py-5 text-muted">No hay compras en este período.</div>
    <?php endif; ?>
  </div>
</section>
<?= $this->endSection()?>