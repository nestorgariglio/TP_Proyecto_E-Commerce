<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> 
  <title>Quelac</title>
</head>
<body class="container-fluid d-flex flex-column align-items-center p-0 m-0">
  <section class="d-flex flex-column align-items-center w-100" style="padding-top: 10rem; padding-bottom: 6rem;">
    <div class="container align-items-center d-flex flex-column gap-3">
      <div class="col-12 col-md-6 border rounded-3 shadow-sm align-items-center d-flex flex-column" style="padding: 3rem;">
        <h2 class="fw-bold fs-2">Regístrate</h2>
        <form action="<?= site_url('register')?>" method="post" class="d-flex flex-column align-items-center gap-3 p-1 w-100">
          <div class="w-100 d-flex flex-column align-items-center gap-3">
            <div class="mb-3 w-75 w-sm-100">
              <label for="name" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre completo" required>
            </div>
            <div class="mb-3 w-75 w-sm-100">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div class="mb-3 w-75">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="mb-3 w-75">
              <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirme su contraseña" required>
            </div>
            <div class="mb-2 form-check w-75">
              <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
              <label class="form-check
              -label" for="terms">Acepto los <a href="<?= site_url('terms') ?>">Términos y Condiciones</a></label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg" style="background-color: #cf172e;">Registrarse</button>
        </form>
      </div>  
    </div>
  </section>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>