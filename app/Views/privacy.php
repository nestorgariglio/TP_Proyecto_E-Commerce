<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="w-100" style="padding-top: 8rem; padding-bottom: 5rem; background-color: #f8f9fa;">
  <div class="container">
    
    <div class="text-center mb-5">
      <h1 class="fw-bold display-5 mb-3">Política de Privacidad</h1>
      <p class="text-muted fs-5 mw-75 mx-auto">
        Tu confianza es lo más importante. Aquí te explicamos claramente qué hacemos con tus datos.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex align-items-center mb-4">
              <div class="p-3 rounded-circle bg-light text-danger me-3">
                <i class="bi bi-shield-lock-fill fs-3"></i>
              </div>
              <h3 class="fw-bold m-0">1. Compromiso de Seguridad</h3>
            </div>
            <p class="text-secondary">
              En <strong>Quelac</strong>, nos tomamos muy en serio la protección de tu información personal. No vendemos, alquilamos ni compartimos tus datos con terceros con fines comerciales. Toda la información que nos facilitas se utiliza exclusivamente para brindarte el mejor servicio posible.
            </p>
          </div>
        </div>

        <div class="accordion shadow-sm border-0 rounded-3 overflow-hidden" id="privacyAccordion">
          
          <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
              <button class="accordion-button fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                2. ¿Qué información recolectamos?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#privacyAccordion">
              <div class="accordion-body pb-4 text-secondary">
                <p>Para procesar tus pedidos correctamente, solicitamos los siguientes datos:</p>
                <ul class="mb-0">
                  <li><strong>Identificación:</strong> Nombre completo y DNI (necesario para la facturación y validación de identidad al entregar).</li>
                  <li><strong>Contacto:</strong> Correo electrónico (para enviarte el comprobante y estado del pedido).</li>
                  <li><strong>Logística:</strong> Dirección física exacta y referencias (solo si eliges envío a domicilio).</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                3. Cookies y Sesiones
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
              <div class="accordion-body pb-4 text-secondary">
                Utilizamos "cookies" de sesión para mantener los productos en tu carrito de compras mientras navegas por la web. Estas son temporales y no rastrean tu actividad fuera de nuestro sitio. Al cerrar sesión o el navegador, la información sensible de la sesión se elimina.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                4. Tus Derechos (Acceso y Eliminación)
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#privacyAccordion">
              <div class="accordion-body pb-4 text-secondary">
                Como usuario, tienes derecho a acceder, rectificar o eliminar tus datos personales de nuestra base de datos en cualquier momento. Puedes gestionar tu información básica desde la sección "Mi Perfil" o solicitar la baja definitiva escribiéndonos a <strong>quelac.contact@gmail.com</strong>.
              </div>
            </div>
          </div>

        </div>

        <div class="mt-4 text-center text-muted small">
          <p>Última actualización: Diciembre 2025</p>
        </div>

      </div>
    </div>
  </div>
</section>
<?= $this->endSection()?>