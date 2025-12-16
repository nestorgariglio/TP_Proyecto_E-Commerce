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
  <div class="py-5 container bg-light rounded-4 my-5">
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

  <div class="py-3 container">
    <h3 class="w-100 text-start fs-4 fw-bold">Recetas con Nuestros Productos</h3>
    <div class="row align-items-center py-4">
      <div class="col-12 col-md-4">
        <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1749077521/recipe-image_c4gm5f.svg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-8 p-3">
        <h4 class="fw-bold">Tarta de Queso y Espinacas</h4>
        <span>Una receta deliciosa y fácil de preparar, ideal para cualquier ocasión. Combina la cremosidad del queso con la frescura de las espinacas.</span>
      </div>
    </div>
  </div>

  <div class="py-2 container">
    <h3 class="w-100 text-start fs-4 fw-bold">Sobre Nosotros</h3>
    <p>En Quelac nos dedicamos a la comercialización de quesos, fiambres y productos refrigerados premium. Ofrecemos calidad, frescura y precios competitivos, con una atención cercana y personalizada que garantiza la mejor experiencia para tu hogar o negocio.</p>
  </div>
</section>
<?= $this->endSection()?>