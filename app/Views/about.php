<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="/TP_Proyecto_E-Commerce/public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
  <title>Quelac</title>
</head>
<body>
  
 <!------------------------------------quienes somos---------------------------------->
 <section id="about">
      <div class="container py-4">
        <div class="row align-items-center g-4">
          <!-- Columna de textos -->
          <div class="col-md-6">
            <div class="p-4 rounded-4 shadow-dura border bg-light custom-shadow mb-5" style="font-family: 'Jeju Hallasan', cursive;">
              <strong class="text-danger" >Quelac</strong> es una empresa dedicada a la comercialización de productos alimenticios de alta calidad. Nuestra especialidad son los quesos y fiambres, acompañados por una cuidada selección de productos refrigerados premium.
            </div>
            <div class="p-4 rounded-4 shadow-dura border bg-light custom-shadow mb-5" style="font-family: 'Jeju Hallasan', cursive;">
              Nos enfocamos en ofrecer las mejores ofertas del mercado, combinando precios competitivos con productos de excelencia. Seleccionamos cuidadosamente cada artículo para garantizar frescura, sabor y confianza.
            </div>
            <div class="p-4 rounded-4 shadow-dura border bg-light  custom-shadow" style="font-family: 'Jeju Hallasan', cursive;">
              <strong class="text-danger ">Quelac</strong> trabaja cada día para que encuentres todo lo que necesitás para tu hogar o negocio en un solo lugar, con atención personalizada, cercana y comprometida.
            </div>
          </div>

          <!-- Columna de imagen -->
          <div class="col-md-6 d-flex justify-content-center">
            <img src="<?= base_url('assets/img/bienvenidos') ?>" class="img-fluid rounded-4 shadow" alt="Productos Quelac">
          </div>
        </div>
      </div>
      
      <style>
        .custom-shadow {
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
      </style>
    </section>
</body>
</html>