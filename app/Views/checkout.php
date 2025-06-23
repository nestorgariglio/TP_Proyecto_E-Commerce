<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmar Compra | Quelac</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
</head>
<body>
  <section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <h2 class="fw-bold mb-4">Confirmar Compra</h2>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <?php $total = 0; ?>
          <?php foreach($cart as $item): ?>
            <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
            <tr>
              <td><?= esc($item['name']) ?></td>
              <td>$<?= esc($item['price']) ?></td>
              <td><?= esc($item['quantity']) ?></td>
              <td>$<?= $subtotal ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-end fw-bold">Total:</td>
            <td class="fw-bold" style="color: #cf172e;">$<?= $total ?></td>
          </tr>
        </tfoot>
      </table>
    </div>
    <form method="post" action="<?= site_url('checkout/process') ?>">
      <button type="submit" class="btn btn-primary" style="background-color: #cf172e;">Confirmar y Comprar</button>
      <a href="<?= site_url('cart') ?>" class="btn btn-outline-secondary">Cancelar</a>
    </form>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>