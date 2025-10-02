<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <div class="row g-5 align-items-center">

    <!-- Imagen del producto -->
    <div class="col-12 col-md-6 text-center">
      <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name'])?>" class="img-fluid rounded shadow" style="max-height: 350px;">
    </div>

    <!-- Detalles del producto -->
    <div class="col-12 col-md-6">
      <h1 class="fw-bold mb-3"><?= esc($product['name'])?></h1>
      <span class="badge bg-secondary mb-2"><?= esc($product['category'])?></span>
      <p class="fs-5 mb-4"><?= esc($product['description'])?></p>

      <div class="mb-4">
        <span class="fw-bold fs-3" style="color: #cf172e;"><?= esc($product['price'])?></span>
      </div>

      <form method="post" action="<?= site_url('cart/add/' . esc($product['id'])) ?>" class="d-flex flex-column gap-3">
        <div class="d-flex align-items-center gap-2">
          <label for="quantity" class="form-label mb-0">Cantidad:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control" style="width: 80px;">
        </div>
        <button type="submit" class="btn btn-lg text-white" style="background-color: #cf172e;">Agregar al Carrito</button>
      </form>

      <div class="mt-4">
        <h5 class="fw-bold">Detalles</h5>
        <ul>
          <li>Origen: Corrientes, Argentina</li>
          <li>Peso aproximado: 500g</li>
          <li>Conservación: Refrigerado</li>
        </ul>
      </div>
      
    </div>
  </div>
</section>
<?= $this->endSection()?>