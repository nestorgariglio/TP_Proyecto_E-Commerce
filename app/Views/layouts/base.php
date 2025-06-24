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
  <?= view('layouts/header') ?>

  <!-- Toast  -->
  <div aria-live="polite" aria-atomic="true" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1080; min-width: 300px;">
    <?php if (session('error')): ?>
      <div class="toast align-items-center text-bg-danger border-0 show" role="alert" id="toastError" data-bs-delay="1000">
        <div class="d-flex">
          <div class="toast-body">
            <?= esc(session('error')) ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Cerrar"></button>
        </div>
      </div>
    <?php endif; ?>
    <?php if (session('success')): ?>
      <div class="toast align-items-center text-bg-success border-0 show" role="alert" id="toastSuccess" data-bs-delay="4000">
        <div class="d-flex">
          <div class="toast-body">
            <?= esc(session('success')) ?>
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Cerrar"></button>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- Render de las views -->
  <?= $this->renderSection('content') ?>

  <script src="https://kit.fontawesome.com/945c8d5c2b.js" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var toastElList = [].slice.call(document.querySelectorAll('.toast'));
      toastElList.forEach(function (toastEl) {
        var toast = new bootstrap.Toast(toastEl, { delay: 4000 });
        toast.show();
      });
    });
  </script>
</body>
</html>