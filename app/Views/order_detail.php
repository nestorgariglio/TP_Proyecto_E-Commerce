<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold m-0">Detalle de tu Pedido</h2>
      <a href="<?= site_url('orders') ?>" class="btn btn-outline-secondary">Volver a mis compras</a>
  </div>

  <div class="row g-4">
    <div class="col-12 col-md-4 order-md-2">
      <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Resumen de Estado</h5>
            
            <div class="mb-3">
                <small class="text-muted d-block">Número de orden</small>
                <strong>#<?= esc($order['id']) ?></strong>
            </div>

            <div class="mb-3">
                <small class="text-muted d-block">Fecha</small>
                <span><?= date('d/m/Y', strtotime(esc($order['created_at']))) ?></span>
            </div>

            <div class="mb-3">
                <small class="text-muted d-block">Estado</small>
                <?php if ($order['status'] === 'Pagado'): ?>
                  <span class="badge bg-success">Pagado</span>
                <?php else: ?>
                  <span class="badge bg-warning text-dark">Pendiente de Pago</span>
                <?php endif; ?>
            </div>
        </div>
      </div>

      <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Pago y Envío</h5>

            <div class="mb-3">
                <small class="text-muted d-block">Método de Pago</small>
                <span>
                    <?= $order['payment_method'] == 'cash' ? '💵 Efectivo / Transferencia' : '💳 Tarjeta de Crédito/Débito' ?>
                </span>
            </div>

            <div class="mb-3">
                <small class="text-muted d-block">Entrega</small>
                <span>
                    <?= $order['shipping_method'] == 'delivery' ? '🚚 Envío a Domicilio' : '🏪 Retiro en Local' ?>
                </span>
            </div>

            <?php if ($order['shipping_method'] == 'delivery'): ?>
                <div class="alert alert-light border">
                    <small class="fw-bold">Dirección de entrega:</small><br>
                    <?= esc($order['shipping_address']) ?>
                </div>
            <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-8 order-md-1">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="bg-light">
                    <tr>
                      <th class="ps-4">Producto</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Cant.</th>
                      <th class="text-end pe-4">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $subtotalProductos = 0; ?>
                    <?php foreach ($items as $item): ?>
                      <?php $subtotalProductos += $item['price'] * $item['quantity']; ?>
                      <tr>
                        <td class="ps-4"><?= esc($item['name']) ?></td>
                        <td class="text-center">$<?= esc($item['price']) ?></td>
                        <td class="text-center"><?= esc($item['quantity']) ?></td>
                        <td class="text-end pe-4">$<?= esc($item['price']) * esc($item['quantity']) ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot class="border-top">
                    <tr>
                        <td colspan="3" class="text-end text-muted pt-3">Subtotal Productos:</td>
                        <td class="text-end pe-4 pt-3">$<?= number_format($subtotalProductos, 2) ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end text-muted border-0">Costo de Envío:</td>
                        <td class="text-end pe-4 border-0">$<?= number_format($order['shipping_cost'], 2) ?></td>
                    </tr>
                    <tr class="fs-5">
                      <td colspan="3" class="text-end fw-bold pt-3 pb-3">Total Final:</td>
                      <td class="text-end fw-bold pt-3 pb-3 pe-4" style="color: #cf172e;">$<?= esc($order['total']) ?></td>
                    </tr>
                  </tfoot>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection()?>