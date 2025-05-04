<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="/TP_Proyecto_E-Commerce/public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/TP_Proyecto_E-Commerce/public/assets/css/style.css">
    <link rel="stylesheet" href="/TP_Proyecto_E-Commerce/public/assets/css/login-btn-style.css">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <title>Quelac</title>

<body class="vh-100 d-flex-col justify-content-center">

    <!----------------------------------Principal----------------------------------->

    <section id="principal">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/img/carrucel1.jpeg') ?>" class="img-fluid w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/img/carrucel2.jpeg') ?>" class="img-fluid w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/img/carrucel3.jpeg') ?>" class="img-fluid w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <!-- Cards -->
<div class="container my-5">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/img/delivery.avif') ?>" class="card-img-top img-fluid" alt="Delivery">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Delivery</h5>
                            <p class="card-text">Delivery a domicilio en cts. Envío gratis dentro de las 4 av. o en compras superiores a $69999</p>
                            <!-- <a href="#" class="btn btn-primary">Más información</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/img/seguridad.png') ?>" class="card-img-top img-fluid" alt="Seguridad">
                        <div class="card-body d-flex flex-column justify-content-end">
                            <h5 class="card-title">Seguridad</h5>
                            <p class="card-text">Seguridad alimentaria. Productos frescos, cuidando la cadena de frío.</p>
                            <!-- <a href="#" class="btn btn-primary">Más información</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/img/tarjetas.png') ?>" class="card-img-top img-fluid" alt="Efectivo y Tarjetas">
                        <div class="card-body d-flex flex-column justify-content-end">
                            <h5 class="card-title">Efectivo y Tarjetas</h5>
                            <p class="card-text">Pagá como quieras. Monto Mínimo de Compra $14.999</p>
                            <!-- <a href="#" class="btn btn-primary">Más información</a> -->
                        </div>
                    </div>
                </div>
            </div>
      </div>

    </section>
    <script src="/TP_Proyecto_E-Commerce/public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
