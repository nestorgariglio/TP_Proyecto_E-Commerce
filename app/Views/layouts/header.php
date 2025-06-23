<header class="position-fixed z-3 w-100 start-0 top-0" style="background-color: #cf172e;">
  <nav class="navbar navbar-expand-lg navbar-dark px-0" style="background-color: #cf172e;">
    <div class="container-lg d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="<?= site_url('/')?>" style="width: 7rem;">
        <img src="https://res.cloudinary.com/dzv36wzmx/image/upload/Quelac_blanco_transparente_s0gwvz.png" alt="Quelac" class="w-100">
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-0" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-4">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('/')?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('catalog')?>">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('about')?>">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('contact')?>">Contacto</a>
          </li>
        </ul>
        <div class="d-flex gap-2 ms-lg-3">
          <a class="btn btn-light" href='<?= site_url('cart')?>'><i class="fa-solid fa-cart-shopping py-1"></i></a>
          <a class="btn btn-light" href="<?= site_url('login')?>"><span style="font-size: 13px;">Iniciar Sesión</span></a>
        </div>
      </div>
    </div>
  </nav>
</header>
 <script src="https://kit.fontawesome.com/945c8d5c2b.js" crossorigin="anonymous"></script>