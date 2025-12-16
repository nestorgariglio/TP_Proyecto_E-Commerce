<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <?php if(session('user_role') == 'admin') :?>
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold m-0">Detalle de Orden #<?= esc($order['id']) ?></h2>
    <a href="<?= site_url('admin/orders') ?>" class="btn btn-outline-secondary">
      Volver a Ventas
    </a>
  </div>
  <div class="row mb-4">
    <div class="col-12 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
              <h5 class="card-title fw-bold border-bottom pb-2">Datos del Cliente</h5>
              <div class="mb-2"><strong>Orden:</strong> #<?= esc($order['id']) ?></div>
              <div class="mb-2"><strong>Cliente:</strong> <?= esc($user['name'])?></div>
              <div class="mb-2"><strong>Email:</strong> <?= esc($user['email'])?></div>
              <div class="mb-2"><strong>Fecha:</strong> <?= date('d/m/Y', strtotime(esc($order['created_at']))) ?></div>
          </div>
      </div>
    </div>
    
    <div class="col-12 col-md-6">
      <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
              <h5 class="card-title fw-bold border-bottom pb-2">Información de Pago y Envío</h5>
              
              <div class="mb-2">
                  <strong>Estado:</strong> 
                  <?php if ($order['status'] === 'Pagado'): ?>
                      <span class="badge bg-success">Pagado</span>
                  <?php else: ?>
                      <span class="badge bg-warning text-dark">Pendiente de Pago</span>
                  <?php endif; ?>
              </div>

              <div class="mb-2">
                  <strong>Método de Pago:</strong> 
                  <?= $order['payment_method'] == 'cash' ? 'Efectivo / Transferencia' : 'Tarjeta de Crédito/Débito' ?>
              </div>

              <div class="mb-2">
                  <strong>Forma de Entrega:</strong> 
                  <?= $order['shipping_method'] == 'delivery' ? 'Envío a Domicilio' : 'Retiro en Local' ?>
              </div>

              <?php if ($order['shipping_method'] == 'delivery'): ?>
                  <div class="alert alert-light border mt-2">
                      <strong>📍 Dirección de entrega:</strong><br>
                      <?= esc($order['shipping_address']) ?>
                  </div>
              <?php endif; ?>

              <div class="mt-3 text-end">
                  <span class="text-muted">Envío: $<?= number_format($order['shipping_cost'], 2) ?></span><br>
                  <span class="fs-4 fw-bold" style="color: #cf172e;">Total: $<?= number_format($order['total'], 2) ?></span>
              </div>
              
              <?php if($order['status'] === 'Pendiente'): ?>
                  <div class="d-grid gap-2 mt-3">
                      <form action="<?= site_url('admin/orders/confirm-payment/' . $order['id']) ?>" method="post">
                          <button type="submit" class="btn btn-success w-100">✔ Registrar Pago Recibido</button>
                      </form>
                  </div>
              <?php endif; ?>
          </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</section>
<?= $this->endSection()?>