<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container-fluid d-flex flex-column align-items-center p-0 m-0">

  <div class="container" style="padding-top: 6rem;">
    <!-- Filtros -->
    <form method="get" class="row g-2 mb-4">
      <div class="col-12 col-md-4">
        <input type="text" name="q" class="form-control" placeholder="Buscar producto...">
      </div>
      <div class="col-12 col-md-4">
        <select name="category" class="form-select">
          <option value="">Todas las categorías</option>
          <option value="Queso">Quesos</option>
          <option value="Fiambre">Fiambres</option>
        </select>
      </div>
      <div class="col-12 col-md-4">
        <button type="submit" class="btn btn-primary w-100" style="background-color: #cf172e;">Filtrar</button>
      </div>
    </form>

    <!-- Grilla de productos -->
    <div class="row g-4">
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="<?= esc($product['image'])?>" alt="<?= esc($product['name']) ?>" class="card-img-top img-fluid">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= esc($product['name'])?></h5>
                <span class="fw-bold mb-2"><?= esc($product['price']) ?></span>
                <a href="<?= site_url('product/' . $product['id'])?>" class="btn btn-primary mt-auto" style="background-color: #cf172e;">Ver Detalles</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12">
          <div class="alert alert-info">No se encontraron productos.</div>
        </div>
      <?php endif; ?>
    </div>

  </div>
</section>
<?= $this->endSection()?>