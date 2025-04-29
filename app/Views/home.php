<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quelac</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/TP_Proyecto_E-Commerce/public/assets/css/style.css">
    <link rel="stylesheet" href="/TP_Proyecto_E-Commerce/public/assets/css/login-btn-style.css">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

<body class="vh-100 d-flex-col justify-content-center">

    <!----------------------------------Principal----------------------------------->

    <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/carrucel1.jpeg" class=" w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/carrucel2.jpeg" class="w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/carrucel3.jpeg" class=" w-100" alt="...">
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


          <!--centra las tarjetas horizontalmente, define una separación uniforme, agrega espacio entre las tarjetas-->
      <div style="display: flex; justify-content: center; gap: 75px; padding: 30px;">
        <div class="card" style="width: 18rem;">
          <img src="/TP_Proyecto_E-Commerce/public/assets/img/delibery.avif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Jeju Hallasan', cursive;">Delivery</h5>
            <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">Delivery a domicilio en cts. Envio gratis dentro de las 4 av. o en compras superiores a $69999</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      
        <div class="card" style="width: 18rem;">
          <img src="/TP_Proyecto_E-Commerce/public/assets/img/seguridad.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Jeju Hallasan', cursive;">Seguridad</h5>
            <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">Seguridad alimentaria. Productos frescos, cuidando la cadena de frío.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      
        <div class="card" style="width: 18rem;" >
          <img src="/TP_Proyecto_E-Commerce/public/assets/img/cartoe.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="font-family: 'Jeju Hallasan', cursive;">Efectivo y Tarjetas</h5>
            <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">Pagá como quieras. Monto Mínimo de Compra $ 14.999</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    </section>


    
<!------------------------------------quienes somos---------------------------------->
    <section>

      <div class="container py-4">
        <div class="row align-items-start g-4">
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
          <div class="col-md-6">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/vienvenidos.jpeg" class="img-fluid rounded-4 shadow" alt="Productos Quelac">
          </div>
        </div>
      </div>
      
      <style>
        .custom-shadow {
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
      </style>
      
      
    </section>







 <!----------------------------------- comercializacion------------------------------------>


    <section style="display: flex; justify-content: center; flex-wrap: wrap; gap: 60px; padding: 40px;">

    <!-- Columna izquierda -->
    <div style="max-width: 500px;">
    <h4 style="font-family: 'Jeju Hallasan', cursive; margin-bottom: 10px;">
        En Quelac te ofrecemos una amplia variedad de productos para tu mesa diaria
    </h4>
    
    <!-- Imagen de productos -->
    <img src="/TP_Proyecto_E-Commerce/public/assets/img/productos.png" alt="Productos Quelac" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
    
    <!-- Fila de imágenes de medios de pago -->
    <div style="display: flex; justify-content: center; gap: 20px;">
        <img src="/TP_Proyecto_E-Commerce/public/assets/img/pagos.jpeg" alt="Medios de pago" style="width: 300px; border-radius: 10px;">
        <img src="/TP_Proyecto_E-Commerce/public/assets/img/envios.jpeg" alt="Formas de envíos" style="width: 300px; border-radius: 10px;">         
    </div>
    </div>


    <!-- Columna derecha -->
    <div style="max-width: 600px;">
        <div style="text-align: center; font-family: 'Jeju Hallasan', cursive; margin-bottom: 20px;">
        <h4>Nuestra variedad de mejores quesos</h4>
        </div>

        <!-- Tarjetas de quesos -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;">
        <!-- Tarjeta  -->
        <div class="card" style="width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-radius: 10px;">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/camembert.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div style="padding: 15px; font-family: 'Jeju Hallasan', cursive;">
            Delicado, cremoso y con una corteza aterciopelada. Ideal para una picada elegante o una cena especial. Un clásico francés que derrite corazones.
            </div>
        </div>
        <!-- Tarjeta -->
        <div class="card" style="width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-radius: 10px;">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/pepato.png" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div style="padding: 15px; font-family: 'Jeju Hallasan', cursive;">
            Queso semiduro con granos de pimienta negra que le dan un toque picante y sabroso. Perfecto para los que buscan intensidad en cada bocado.
            </div>
        </div>
        <!-- Tarjeta -->
        <div class="card" style="width: 250px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-radius: 10px; grid-column: span 2; justify-self: center;">
            <img src="/TP_Proyecto_E-Commerce/public/assets/img/ahumado.jpg" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div style="padding: 15px; font-family: 'Jeju Hallasan', cursive;">
            Queso Ahumado, sabor suave con un toque irresistible. Textura firme y aroma envolvente. Ideal para picadas y rallado para acompañar las pastas.
            </div>
        </div>
        </div>



    </section>

<!------------------------------------Información de Contacto----------------------------------->


    <section class="container py-5">
        <h2 class="text-center mb-4" >Contáctenos</h2>
    
        <p class="text-danger fw-bold text-center fs-4" >¡Nos encanta escucharte!</p>
        <p class="text-center mx-auto" style="max-width: 800px;" >
        En <strong >Quelac</strong> trabajamos cada día para llevarte lo mejor en quesos, fiambres, productos de almacén y bebidas. <br>
        Si tenés alguna duda, sugerencia, consulta sobre nuestros productos o simplemente querés saber más sobre lo que ofrecemos, no dudes en escribirnos. <br>
        <span class="fw-bold text-danger">Tu mensaje es importante para nosotros.</span> Estamos para ayudarte.
        </p>

    
        <form class="mt-4" style="max-width: 700px; margin: 0 auto;">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre (Obligatorio)</label>
                <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email (Obligatorio)</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto (Obligatorio)</label>
                <input type="text" class="form-control" id="asunto" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje (Obligatorio)</label>
                <textarea class="form-control" id="mensaje" rows="5" required></textarea>
            </div>
        
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terminos" required>
                <label class="form-check-label" for="terminos">
                Acepto los <a href="#">Términos y Condiciones</a> y la <a href="#">Política de Privacidad</a> de este sitio
                </label>
            </div>
        
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>


            <!-- Datos de contacto de la empresa -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                <h5 class="mb-3">Datos de la Empresa</h5>
                <p><strong>Nombre del titular:</strong> Quelac</p>
                <p><strong>Razón social:</strong> Quelac SRL</p>
                <p><strong>Domicilio legal:</strong>Teniente Ibañez 1356</p>
                <p><strong>Teléfono:</strong> 3794077353</p>
                <p><strong>Email:</strong> quelac@gmail.com</p>
                <p><strong>Instagram:</strong> @quelac_corrientes</p>
                </div>
            </div>
        </div>



    </section>


    <!------------------------------------Términos y Usos------------------------------------>


    <section class="container py-5" id="terminos-uso">
        <h2 class="text-center mb-4" >Términos y Condiciones de Uso</h2>

        <div class="text-start" style="max-width: 900px; margin: 0 auto; font-size: 1rem; line-height: 1.7;" >
            <p><strong >Uso del sitio:</strong> Al ingresar a este sitio web, el usuario acepta los presentes Términos y Condiciones de uso. Este sitio está destinado a brindar información sobre nuestros productos y permitir la comunicación con clientes y potenciales compradores.</p>

            <p ><strong>Productos y servicios:</strong> Quelac SRL ofrece productos alimenticios como quesos, fiambres, bebidas y artículos de almacén. Todos los productos están sujetos a disponibilidad. Las imágenes y descripciones son ilustrativas.</p>

            <p ><strong>Política de privacidad:</strong> La información proporcionada por los usuarios a través del formulario de contacto será utilizada exclusivamente para responder consultas, brindar asistencia y enviar novedades si el usuario así lo solicita. No compartimos información personal con terceros.</p>

            <p ><strong>Formas de entrega:</strong> Ofrecemos retiro en tienda y entregas a domicilio en zonas habilitadas. Los envíos se coordinan luego de la confirmación del pedido. Los tiempos de entrega pueden variar según la ubicación.</p>

            <p ><strong>Garantía y soporte:</strong> Si el producto recibido no se encuentra en condiciones adecuadas o no corresponde al solicitado, el cliente podrá comunicarse dentro de las 48 horas para realizar el reclamo. Nuestro equipo evaluará cada caso para ofrecer una solución adecuada.</p>

            <p><strong>Medios de pago:</strong> Aceptamos efectivo, tarjetas de débito/crédito y billeteras virtuales (Mercado Pago, etc.). Todos los pagos se realizan de forma segura.</p>

            <p ><strong>Modificaciones:</strong> Quelac SRL se reserva el derecho de modificar estos Términos y Condiciones en cualquier momento, sin previo aviso.</p>

            <p class="text-center fw-bold mt-4 text-danger">Si tenés alguna duda, podés contactarnos a través del formulario o por nuestros medios de contacto directos.</p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>
