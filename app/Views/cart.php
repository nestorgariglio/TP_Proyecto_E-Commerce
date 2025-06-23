<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Carrito | Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <h2 class="fw-bold mb-4">Tu Carrito</h2>
    <!-- Si el carrito está vacío -->
    <!-- <div class="alert alert-info">Tu carrito está vacío.</div> -->

    <!-- Tabla de productos en el carrito -->
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Producto</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Subtotal</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($cart)): ?>
            <?php $total = 0?>
            <?php foreach($cart as $item): ?>
              <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
              <tr>
                <td class="d-flex align-items-center gap-3">
                  <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['name'])?>" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
                  <span><?= esc($item['name'])?></span>
                </td>
                <td class="text-center">$<?= esc($item['price'])?></td>
                <td class="text-center">
                  <form method="post" action="<?= site_url('cart/update/' . $item['id']) ?>" class="d-inline">
                    <input type="number" name="quantity" value="<?= esc($item['quantity'])?>" min="1" class="form-control text-center" style="width: 70px; display: inline-block;">
                    <button type="submit" class="btn btn-sm btn-outline-secondary ms-1">Actualizar</button>
                  </form>
                </td>
                <td class="text-center">$<?= $subtotal?></td>
                <td class="text-center">
                  <form method="post" action="<?= site_url('cart/remove/' . $item['id']) ?>" class="d-inline">
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="text-center">Tu carrito está vacío.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

    <!-- Total y acciones -->
    <div class="d-flex flex-column flex-md-row justify-content-end align-items-end gap-3 mt-4">
      <div>
        <h4>Total: <span class="fw-bold" style="color: #cf172e;">$<?= isset($total) ? $total : 0?></span></h4>
      </div>
      <div class="d-flex gap-2">
        <a href="<?= site_url('catalog') ?>" class="btn btn-outline-secondary">Seguir comprando</a>
        <?php if (!empty($cart)): ?>
          <a href="<?= site_url('checkout') ?>" class="btn btn-primary text-white" style="background-color: #cf172e;">Finalizar compra</a>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>