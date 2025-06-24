<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="d-flex flex-column align-items-center" style="padding-top: 6rem;">
  <div class="container">
    <h3 class="fs-2 fw-bold text-start">Nuestra Historia</h3>
    <span>
      Quelac nació en 2016 en la ciudad de Corrientes como una oportunidad de crecimiento que dio origen a una sociedad anónima enfocada en ofrecer alimentos de calidad. Con el tiempo, nos consolidamos como referentes en quesos y fiambres, sumando también una amplia variedad de productos de despensa. Gracias al compromiso con la frescura, el buen precio y la atención cercana, hoy contamos con 6 locales en la ciudad y seguimos creciendo cada día.
    </span>
  </div>
  <div class="container mt-5">
    <h3 class="fs-4 fw-bold">Nuestro Equipo</h3>
    <div class="row g-3">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card p-3 gap-3 shadow card-hover-scale h-100 d-flex align-items-center">
          <img src="https://images.unsplash.com/photo-1740252117013-4fb21771e7ca?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded-circle img-fluid" style="width: 60px; height: 60px;">
          <div class="text-center">
            <p class="fw-semibold m-0">Nestor Gariglio</p>
            <span class="text-secondary m-0" style="font-size: 12px;">CEO - Desarrollador</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card p-3 gap-3 shadow card-hover-scale h-100 d-flex align-items-center">
          <img src="https://images.unsplash.com/photo-1740252117012-bb53ad05e370?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded-circle img-fluid" style="width: 60px; height: 60px;">
          <div class="text-center">
            <p class="fw-semibold m-0">Luciano Zaya</p>
            <span class="text-secondary m-0" style="font-size: 12px;">CEO - Desarrollador</span>
          </div>
        </div>
      </div>
      <!-- Agrega más miembros aquí si lo deseas -->
    </div>
    <div class="w-100 my-3">
      <span>
        Nuestro equipo está conformado por profesionales apasionados por la tecnología y el desarrollo de soluciones innovadoras. Néstor Gariglio y Luciano Zayas, cofundadores y CEOs, lideran este proyecto con compromiso, creatividad y una sólida visión técnica. Como desarrolladores, combinan experiencia y dedicación para crear herramientas funcionales, eficientes y centradas en el usuario. Juntos, impulsan un equipo enfocado en brindar experiencias digitales de calidad, pensadas para marcar la diferencia..
      </span>
    </div>
  </div>
</section>
<?= $this->endSection() ?>