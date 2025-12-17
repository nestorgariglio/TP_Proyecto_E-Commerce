<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<section class="d-flex flex-column justify-content-center align-items-center w-100" style="padding-top: 6rem; padding-left: 2rem; padding-right: 2rem;">
  <div class="card text-bg-dark border-0 shadow w-100 container-lg p-0">
    <img src="https://res.cloudinary.com/dx7e5izqu/image/upload/v1765396094/hero_image_o6qw1i.jpg" class="card-img img-fluid w-100" alt="...">

    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center px-2 px-md-5 mt-3 gap-2 gap-md-3">
      <h1 class="card-title text-center fw-bolder text-break" style="filter: drop-shadow(5px 5px 5px black);">Descubre la Excelencia en Quesos y Fiambres</h1>
      <span class="card-text text-center text-break" style="filter: drop-shadow(2px 2px 2px black);">En Quelac, seleccionamos cuidadosamente los mejores quesos y fiambres para deleitar tu paladar. Explora nuestra variedad y disfruta de sabores auténticos.</span>
      <a href="<?= site_url('catalog')?>" class="btn btn-lg mt-2 mt-md-3 px-3" style="background-color: #cf172e;">
        <span class="fw-medium fs-6 text-white">Explorar Productos</span>
      </a>
    </div>
  </div>

  <div class="py-5 container">
    <h3 class="w-100 text-start fs-4 fw-bold">Explora por Categoría</h3>
    <div class="row w-100 g-3"> <?php foreach($categories as $cat): ?>
      <div class="col-12 col-md-4">
        <a href="<?= site_url('catalog?category=' . esc($cat['filter']))?>" class="text-decoration-none text-dark h-100 d-block">
          <div class="card h-100 border-0 shadow-sm hover-effect d-flex flex-column align-items-center p-4 text-center " style="transition: transform 0.2s;">
            <img src="<?= esc($cat['image']) ?>" alt="<?= esc($cat['title']) ?>" class="img-fluid mb-3" style="max-height: 150px; object-fit: contain;">
            <h4 class="m-0 fw-semibold fs-5"><?= esc($cat['title']) ?></h4>
            <p class="text-muted small mt-2">
              <?= esc($cat['description']) ?>
            </p>
            <span class="btn btn-sm btn-outline-danger mt-auto rounded-pill px-4">Ver Productos</span>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
    </div>
  </div>

  <?php if (!empty($featuredProducts)): ?>
  <div class="py-5 container rounded-4 my-5">
      <div class="d-flex justify-content-between align-items-center mb-4 px-3">
          <h3 class="fw-bold m-0">Productos Destacados</h3>
          <a href="<?= site_url('catalog') ?>" class="btn btn-outline-dark btn-sm">Ver Todo</a>
      </div>
      
      <div class="row px-3 g-4">
          <?php foreach($featuredProducts as $prod): ?>
              <div class="col-12 col-sm-6 col-lg-3">
                  <div class="card h-100 border-0 shadow-sm hover-effect">
                      <img src="<?= esc($prod['image']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
                      <div class="card-body d-flex flex-column">
                          <h5 class="card-title fs-6 fw-bold"><?= esc($prod['name']) ?></h5>
                          <p class="card-text text-muted small text-truncate"><?= esc($prod['description']) ?></p>
                          <div class="mt-auto d-flex justify-content-between align-items-center">
                              <span class="fw-bold text-danger">$<?= esc($prod['price']) ?></span>
                              <a href="<?= site_url('product/'.$prod['id']) ?>" class="btn btn-sm btn-dark rounded-circle">
                                  <i class="bi bi-eye"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>
  <?php endif; ?>

<div class="py-5 container">
    <h3 class="w-100 text-start fs-4 fw-bold">Inspiración en tu Cocina</h3>
    <div class="card border-0 shadow-sm overflow-hidden bg-white">
        <div class="row g-0 align-items-center">
          <div class="col-12 col-md-5">
            <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1749077521/recipe-image_c4gm5f.svg" alt="Tarta de Espinacas" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 250px;">
          </div>
          <div class="col-12 col-md-7 p-4 p-md-5">
            <span class="badge bg-success mb-2">Vegetariana</span>
            <h4 class="fw-bold mb-3">Tarta Pascualina de Queso Cremoso y Espinacas</h4>
            <p class="text-muted mb-4">
                Una receta clásica, nutritiva y salvadora. El secreto está en usar un buen <strong>Queso Cremoso Quelac</strong> para lograr esa textura fundida irresistible. ¡Ideal para la cena de hoy!
            </p>
            <button type="button" class="btn btn-outline-dark rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#recipeModal">
                <i class="bi bi-book me-2"></i>Ver Receta Completa
            </button>
          </div>
        </div>
    </div>
  </div>
</section>

<div class="modal fade" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 rounded-4">
      <div class="modal-header border-0 bg-light">
        <h5 class="modal-title fw-bold" id="recipeModalLabel">👩‍🍳 Tarta de Queso y Espinacas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <div class="row">
            <div class="col-12 col-md-5 mb-4 border-end-md">
                <h6 class="fw-bold text-danger mb-3"><i class="bi bi-basket me-2"></i>Ingredientes</h6>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i>2 Tapas de pascualina</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i>500g Espinaca cocida</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i><strong>300g Queso Cremoso Quelac</strong></li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i>100g Queso Rallado</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i>3 Huevos</li>
                    <li class="list-group-item bg-transparent px-0"><i class="bi bi-check2 text-success me-2"></i>1 Cebolla picada</li>
                </ul>
                
                <div class="mt-4 p-3 bg-light rounded-3 text-center">
                    <small class="text-muted d-block mb-2">¿Te falta el queso?</small>
                    <a href="<?= site_url('catalog?category=Queso') ?>" class="btn btn-sm btn-danger w-100">Comprar Ingredientes</a>
                </div>
            </div>
            
            <div class="col-12 col-md-7 ps-md-4">
                <h6 class="fw-bold text-danger mb-3"><i class="bi bi-list-ol me-2"></i>Paso a Paso</h6>
                <ol class="list-group list-group-numbered list-group-flush">
                    <li class="list-group-item bg-transparent">Rehogar la cebolla picada en una sartén con un poco de aceite hasta que esté transparente.</li>
                    <li class="list-group-item bg-transparent">En un bowl, mezclar la espinaca picada, la cebolla, los huevos batidos y el queso rallado. Condimentar con sal, pimienta y nuez moscada.</li>
                    <li class="list-group-item bg-transparent">Colocar una tapa de masa en una tartera aceitada. Volcar la mezcla encima.</li>
                    <li class="list-group-item bg-transparent"><strong>El toque mágico:</strong> Cortar el <strong>Queso Cremoso</strong> en cubos generosos y distribuirlos hundiéndolos en el relleno.</li>
                    <li class="list-group-item bg-transparent">Cubrir con la otra tapa (opcional), repulgar y llevar a horno medio (180°C) por 40 minutos o hasta dorar.</li>
                </ol>
            </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection()?>