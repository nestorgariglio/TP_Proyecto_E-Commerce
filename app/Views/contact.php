<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="w-100" style="padding-top: 8rem; padding-bottom: 5rem; background-color: #f8f9fa;">
  <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5 mb-3">¡Hablemos!</h2>
      <p class="text-muted fs-5 mw-75 mx-auto">
        ¿Tienes dudas sobre un pedido o nuestros productos? Estamos aquí para ayudarte.
      </p>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success text-center mb-4 shadow-sm border-0">
            <i class="bi bi-check-circle-fill me-2"></i> <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger text-center mb-4 shadow-sm border-0">
             <i class="bi bi-exclamation-triangle-fill me-2"></i> <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <div class="card border-0 shadow-lg overflow-hidden rounded-4">
      <div class="row g-0">
        
        <div class="col-12 col-lg-5 text-white d-flex flex-column" style="background-color: #cf172e;">
          <div class="p-5 flex-grow-1">
            <h3 class="fw-bold mb-4 text-white">Información de Contacto</h3>
            
            <div class="d-flex align-items-start mb-4">
                <i class="bi bi-geo-alt-fill fs-4 me-3 opacity-75"></i>
                <div>
                    <h6 class="fw-bold mb-1">Visítanos</h6>
                    <p class="mb-0 opacity-75">Av. 3 de Abril 534<br>Corrientes Capital, Argentina</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <i class="bi bi-envelope-fill fs-4 me-3 opacity-75"></i>
                <div>
                    <h6 class="fw-bold mb-1">Escríbenos</h6>
                    <p class="mb-0 opacity-75">quelac.contact@gmail.com</p>
                </div>
            </div>

            <div class="d-flex align-items-start mb-4">
                <i class="bi bi-whatsapp fs-4 me-3 opacity-75"></i>
                <div>
                    <h6 class="fw-bold mb-1">Llámanos</h6>
                    <p class="mb-0 opacity-75">+54 9 379 412-3456</p>
                </div>
            </div>

            <div class="mt-5">
                <h6 class="fw-bold mb-3">Síguenos</h6>
                <div class="d-flex gap-3">
                    <a href="#" class="text-white fs-4 opacity-75 hover-opacity"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-4 opacity-75 hover-opacity"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-4 opacity-75 hover-opacity"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
          </div>
          
          <div style="height: 250px; width: 100%;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0798123070854!2d-58.83433078869273!3d-27.466774516483348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456dc2522d0ab5%3A0x1e4d43e16b1bcc6f!2sQuelac!5e0!3m2!1ses-419!2sar!4v1765398449874!5m2!1ses-419!2sar" 
                width="100%" 
                height="100%" 
                style="border:0; filter: grayscale(100%) invert(92%) contrast(83%);" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
          </div>
        </div>

        <div class="col-12 col-lg-7 bg-white p-5">
          <h3 class="fw-bold mb-4" style="color: #333;">Envíanos un mensaje</h3>
          
          <form action="<?= site_url('contact/send') ?>" method="post">
            <?= csrf_field() ?> <div class="row g-3">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre" value="<?= old('name') ?>">
                        <label for="name">Nombre Completo</label>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" value="<?= old('email') ?>">
                        <label for="email">Correo Electrónico</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Deja tu mensaje aquí" id="message" name="message" style="height: 150px"><?= old('message') ?></textarea>
                        <label for="message">¿En qué podemos ayudarte?</label>
                    </div>
                </div>
                
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-lg text-white px-5 rounded-pill shadow-sm hover-scale" style="background-color: #cf172e;">
                        Enviar Mensaje <i class="bi bi-send-fill ms-2"></i>
                    </button>
                </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
    /* Efecto hover suave para iconos sociales */
    .hover-opacity:hover { opacity: 1 !important; transition: opacity 0.3s; }
    /* Efecto escala botón */
    .hover-scale { transition: transform 0.2s; }
    .hover-scale:hover { transform: scale(1.02); }
</style>

<?= $this->endSection()?>