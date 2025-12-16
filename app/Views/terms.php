<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="w-100" style="padding-top: 8rem; padding-bottom: 5rem; background-color: #f8f9fa;">
  <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5 mb-3">Aviso Legal</h2>
      <p class="text-muted fs-5 mw-75 mx-auto">
        Transparencia y claridad son nuestros valores. Aquí te explicamos cómo funciona Quelac.
      </p>
    </div>

    <div class="card border-0 shadow-sm mb-5">
      <div class="card-body p-4 p-md-5 text-center">
        <h3 class="h4 fw-bold mb-3">Términos y Condiciones de Uso</h3>
        <p class="text-secondary m-0 fs-5">
          Bienvenido a Quelac. Al acceder y utilizar este sitio web, usted acepta cumplir con los siguientes términos y condiciones de uso. Si no está de acuerdo con estos términos, le rogamos no utilizar este sitio.
        </p>
      </div>
    </div>

    <div class="row g-4">
      
      <div class="col-12 col-md-6">
        <div class="card h-100 border-0 shadow-sm hover-effect">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-3 d-flex align-items-center justify-content-center me-3" style="background-color: rgba(207, 23, 46, 0.1); width: 50px; height: 50px;">
                <i class="bi bi-shop fs-4" style="color: #cf172e;"></i>
              </div>
              <h4 class="fw-bold fs-5 m-0">Servicios Ofrecidos</h4>
            </div>
            <p class="text-muted m-0">
              Quelac ofrece una plataforma de comercio electrónico especializada en la venta de quesos y fiambres artesanales. Los usuarios pueden explorar nuestro catálogo, seleccionar productos y gestionar sus compras online de forma segura.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card h-100 border-0 shadow-sm hover-effect">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-3 d-flex align-items-center justify-content-center me-3" style="background-color: rgba(207, 23, 46, 0.1); width: 50px; height: 50px;">
                <i class="bi bi-shield-lock fs-4" style="color: #cf172e;"></i>
              </div>
              <h4 class="fw-bold fs-5 m-0">Política de Privacidad</h4>
            </div>
            <p class="text-muted m-0">
              Respetamos su privacidad. La información personal recopilada se utiliza exclusivamente para procesar su pedido y mejorar su experiencia. No compartimos su información con terceros sin su consentimiento explícito.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card h-100 border-0 shadow-sm hover-effect">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-3 d-flex align-items-center justify-content-center me-3" style="background-color: rgba(207, 23, 46, 0.1); width: 50px; height: 50px;">
                <i class="bi bi-award fs-4" style="color: #cf172e;"></i>
              </div>
              <h4 class="fw-bold fs-5 m-0">Ventas y Garantías</h4>
            </div>
            <p class="text-muted m-0">
              Nuestros productos cumplen con altos estándares de seguridad alimentaria. Si recibe un producto en mal estado, contáctenos dentro de las 24 horas siguientes a la recepción para gestionar el cambio o reembolso inmediato.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card h-100 border-0 shadow-sm hover-effect">
          <div class="card-body p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-3 d-flex align-items-center justify-content-center me-3" style="background-color: rgba(207, 23, 46, 0.1); width: 50px; height: 50px;">
                <i class="bi bi-truck fs-4" style="color: #cf172e;"></i>
              </div>
              <h4 class="fw-bold fs-5 m-0">Entregas y Tiempos</h4>
            </div>
            <p class="text-muted m-0">
              Envíos en Corrientes Capital. Procesamiento en 2hs hábiles. Entregas Lun-Sáb 14:00-19:00 hs. Pedidos antes de las 13hs se entregan el mismo día. El tiempo puede variar según disponibilidad.
            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="mt-5 text-center">
      <div class="alert alert-light border shadow-sm d-inline-block px-5 py-4">
        <h4 class="fw-bold fs-5 mb-2">¿Necesitas ayuda adicional?</h4>
        <p class="text-muted mb-3">Nuestro equipo de soporte postventa está aquí para resolver tus dudas.</p>
        <a href="<?= base_url('/contact') ?>" class="btn text-white fw-bold px-4" style="background-color: #cf172e;">
          <i class="bi bi-envelope me-2"></i> Contactar Soporte
        </a>
      </div>
    </div>

  </div>
</section>

<style>
  .hover-effect { transition: transform 0.2s ease-in-out; }
  .hover-effect:hover { transform: translateY(-5px); }
</style>

<?= $this->endSection()?>