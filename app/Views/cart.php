<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <h2 class="fw-bold mb-4">Tu Carrito</h2>

  <?php if(empty($cart)): ?>
    <div class="text-center py-5">
        <i class="bi bi-cart-x display-1 text-muted mb-3"></i>
        <h3 class="text-muted">Tu carrito está vacío</h3>
        <p class="mb-4">Parece que aún no has agregado nada delicioso.</p>
        <a href="<?= site_url('catalog') ?>" class="btn btn-primary px-4 rounded-pill" style="background-color: #cf172e;">
            Ir al Catálogo
        </a>
    </div>

  <?php else: ?>
    <?php $total = 0; ?>

    <div class="table-responsive d-none d-md-block mb-4">
      <table class="table align-middle">
        <thead class="bg-light">
          <tr>
            <th>Producto</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Subtotal</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($cart as $item): ?>
            <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
            <tr>
              <td class="d-flex align-items-center gap-3">
                <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['name'])?>" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
                <span class="fw-bold"><?= esc($item['name'])?></span>
              </td>
              <td class="text-center">$<?= esc($item['price'])?></td>
              <td class="text-center">
                <form method="post" action="<?= site_url('cart/update/' . esc($item['id'])) ?>" class="d-flex justify-content-center gap-2">
                  <input type="number" name="quantity" value="<?= esc($item['quantity'])?>" min="1" class="form-control form-control-sm text-center" style="width: 70px;">
                  <button type="submit" class="btn btn-sm btn-outline-secondary" title="Actualizar Cantidad">
                    <i class="bi bi-arrow-repeat"></i>
                  </button>
                </form>
              </td>
              <td class="text-center fw-bold">$<?= $subtotal?></td>
              <td class="text-center">
                <form method="post" action="<?= site_url('cart/remove/' . esc($item['id'])) ?>" class="d-inline">
                  <button type="submit" class="btn btn-sm btn-outline-danger border-0" title="Eliminar">
                    <i class="bi bi-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="d-md-none mb-4">
        <?php $total = 0; ?>
        <?php foreach($cart as $item): ?>
            <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
            <div class="card mb-3 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <img src="<?= esc($item['image']) ?>" class="rounded-3" style="width: 90px; height: 90px; object-fit: cover;">
                        
                        <div class="flex-grow-1 d-flex flex-column justify-content-between">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="fw-bold mb-1 line-clamp-2"><?= esc($item['name'])?></h6>
                                    <small class="text-muted">Unitario: $<?= esc($item['price'])?></small>
                                </div>
                                <form method="post" action="<?= site_url('cart/remove/' . esc($item['id'])) ?>">
                                    <button type="submit" class="btn btn-link text-danger p-0 ms-2">
                                        <i class="bi bi-trash fs-5"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="d-flex justify-content-between align-items-end mt-2">
                                <form method="post" action="<?= site_url('cart/update/' . esc($item['id'])) ?>" class="d-flex align-items-center gap-2">
                                    <input type="number" name="quantity" value="<?= esc($item['quantity'])?>" min="1" class="form-control form-control-sm text-center px-1" style="width: 50px;">
                                    <button type="submit" class="btn btn-sm btn-light border">
                                        <i class="bi bi-arrow-repeat"></i>
                                    </button>
                                </form>
                                
                                <span class="fw-bold text-danger fs-5">$<?= $subtotal?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="card border-0 shadow-sm bg-light">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                <span class="fs-5">Total Final:</span>
                <span class="fs-2 fw-bold" style="color: #cf172e;">$<?= $total ?></span>
            </div>
            
            <div class="d-flex flex-column flex-md-row justify-content-end gap-2">
                <a href="<?= site_url('catalog') ?>" class="btn btn-outline-secondary py-2 px-4">
                    <i class="bi bi-arrow-left me-2"></i>Seguir comprando
                </a>
                <a href="<?= site_url('checkout') ?>" class="btn btn-primary text-white py-2 px-5 fw-bold shadow-sm" style="background-color: #cf172e;">
                    Finalizar Compra <i class="bi bi-check-lg ms-2"></i>
                </a>
            </div>
        </div>
    </div>

  <?php endif; ?>
</section>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<?= $this->endSection()?>