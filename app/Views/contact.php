<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="d-flex flex-column align-items-center w-100" style="padding-top: 6rem;">
  <div class="container">
    <h3 class="fs-2 fw-bold text-start">¡Contactanos!</h3>
    <span>
      ¡Estamos aquí para ayudarte! Si tienes alguna pregunta sobre nuestros productos, necesitas ayuda con un pedido o simplemente quieres compartir tu opinión, nos encantaría saber de ti. Usa la información de contacto a continuación o completa el formulario y nos pondremos en contacto contigo lo antes posible.
    </span>
    <div class="col mt-4 g-3">
      <div class="col-12 col-md-6">
        <h4 class="fs-4 fw-bold mt-4">Información de Contacto</h4>
        <div class="row g-3">
          <div class="col-12 col-sm-6">
            <hr class="w-100">
            <span><p class="text-secondary m-0">Nombre Comercial</p>Quelac</span>
          </div>
          <div class="col-12 col-sm-6">
            <hr class="w-100">
            <span><p class="text-secondary m-0">Nombre Legal</p>Quelac Inc.</span>
          </div>
          <div class="col-12 col-sm-6">
            <hr class="w-100">
            <span><p class="text-secondary m-0">Dirección</p>Av. 3 de Abril 534, Corrientes Capital,<br> ARG</span>
          </div>
          <div class="col-12 col-sm-6">
            <hr class="w-100">
            <span><p class="text-secondary m-0">Teléfono</p>+54 9 11 1234-5678</span>
          </div>
          <div class="col-12">
            <hr class="w-100">
            <span><p class="text-secondary m-0">Correo Electrónico</p>quelac.contact@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex flex-column align-items-start gap-3 mt-5 mt-md-0 py-2">
        <h4 class="fw-bold">Envíanos un Mensaje</h4>
        <form action="submit" class="d-flex flex-column w-100 gap-1">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" name="name" placeholder="Ingrese su nombre" class="form-control p-2 mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Ingrese su email" class="form-control p-2 mb-3">
          <label for="mensaje">Mensaje</label>
          <textarea name="mensaje" placeholder="Ingrese su mensaje" class="form-control p-2 mb-3" rows="5"></textarea>
          <button type="submit" class="btn btn-md text-white mt-2" style="background-color: #cf172e;">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection()?>