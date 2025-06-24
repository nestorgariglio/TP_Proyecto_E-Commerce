<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="d-flex flex-column align-items-center" style="padding-top: 6rem;">
  <div class="container">
    <h3 class="fs-2 fw-bold text-start">Nuestra Historia</h3>
    <span>
      En Sabores del Sur, nuestra pasión por los quesos y fiambres artesanales nos impulsa a ofrecer productos de la más alta calidad. Desde nuestros inicios, nos hemos dedicado a seleccionar cuidadosamente cada pieza, trabajando en estrecha colaboración con productores locales que comparten nuestro compromiso con la excelencia y la tradición. Nuestra misión es llevar a tu mesa los auténticos sabores de nuestra región, respetando los procesos artesanales y garantizando la frescura y el sabor inigualable de cada producto.
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
        Nuestro equipo está formado por profesionales apasionados por la gastronomía y comprometidos con la calidad. Sofía Rodríguez, nuestra fundadora y CEO, lidera con visión y experiencia. Martín García, nuestro maestro quesero, aporta su conocimiento ancestral en la elaboración de quesos artesanales. Lucía Pérez, nuestra especialista en fiambres, selecciona cuidadosamente cada pieza para garantizar su sabor y frescura. Juntos, trabajamos para ofrecerte una experiencia culinaria única y satisfactoria.
      </span>
    </div>
  </div>
</section>
<?= $this->endSection() ?>