<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="d-flex flex-column align-items-center w-100" style="padding-top: 10rem; padding-bottom: 6rem;">
  <div class="container align-items-center d-flex flex-column gap-3">
    <div class="col-12 col-md-6 border rounded-3 shadow-sm align-items-center d-flex flex-column" style="padding: 4rem;">
      <h2 class="fw-bold fs-2">Inicie Sesión</h2>
        <form action="<?= site_url('login') ?>" method='post' class="d-flex flex-column align-items-center gap-3 p-1 w-100">
          <div class="w-100 d-flex flex-column align-items-center gap-3">
            <div class="mb-3 w-75 w-sm-100">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div class="mb-3 w-75">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg " style="background-color: #cf172e;">Iniciar Sesión</button>
          <div class="mt-3 fs-6 text-center">
            <span>¿No tienes una cuenta? <a href="<?= base_url('register') ?>">Regístrate aquí</a></span>
          </div>
        </form>
    </div>
  </div>
</section>
<?= $this->endSection()?>