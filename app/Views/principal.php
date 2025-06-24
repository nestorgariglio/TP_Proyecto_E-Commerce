<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>
<section class="d-flex flex-column justify-content-center align-items-center w-100" style="padding-top: 6rem; padding-left: 2rem; padding-right: 2rem;">
  <div class="card text-bg-dark border-0 shadow w-100 container-lg p-0">
    <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1748896651/fiambre-hero_rhqrid.svg" class="card-img img-fluid w-100" alt="...">
    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center px-2 px-md-5 mt-3 gap-2 gap-md-3">
      <h1 class="card-title text-center fw-bolder text-break">Descubre la Excelencia en Quesos y Fiambres</h1>
      <span class="card-text text-center text-break">En Sabores del Campo, seleccionamos cuidadosamente los mejores quesos y fiambres artesanales para deleitar tu paladar. Explora nuestra variedad y disfruta de sabores auténticos.</span>
      <a href="<?= site_url('catalog')?>" class="btn btn-lg mt-2 mt-md-3 px-3" style="background-color: #cf172e;">
        <span class="fw-medium fs-6 text-white">Explorar Productos</span>
      </a>
    </div>
  </div>
  <div class="py-5 container">
    <h3 class="w-100 text-start fs-4 fw-bold">Nuestros Productos Destacados</h3>
    <div class="row w-100 g-3">
      <div class="col-12 col-md-4">
        <div class="py-4 h-100 d-flex flex-column align-items-center">
          <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1749076696/suggested1_caxxbf.svg" alt="" class="img-fluid">
          <p class="m-0 pt-2 fw-semibold">Quesos Artesanales</p>
          <span class="text-gray">Una selección de quesos madurados y frescos, con sabores únicos y texturas irresistibles.</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="py-4 h-100 d-flex flex-column align-items-center">
          <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1749076696/suggested2_i6ided.svg" alt="" class="img-fluid">
          <p class="m-0 pt-2 fw-semibold">Fiambres Selectos</p>
          <span>Fiambres curados con técnicas tradicionales, que resaltan los sabores y aromas de cada pieza.</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="py-4 h-100 d-flex flex-column align-items-center">
          <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/v1749076696/suggested3_nnn74w.svg" alt="" class="img-fluid">
          <p class="m-0 pt-2 fw-semibold">Tablas de Degustación</p>
          <span>Combina quesos y fiambres en nuestras tablas de degustación, perfectas para compartir y disfrutar.</span>
        </div>
      </div>
    </div>
  </div>
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
    <p>En Sabores del Campo, somos apasionados por los productos artesanales de alta calidad. Trabajamos directamente con productores locales para ofrecerte lo mejor de nuestra tierra. Nuestra misión es llevar a tu mesa sabores auténticos y experiencias culinarias inolvidables.</p>
  </div>
</section>
<?= $this->endSection()?>