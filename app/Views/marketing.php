<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="w-100" style="padding-top: 8rem; padding-bottom: 5rem; background-color: #f8f9fa;">
  <div class="container">
    
    <div class="text-center mb-5">
      <h2 class="fw-bold display-5 mb-3">Envíos y Formas de Pago</h2>
      <p class="text-muted fs-5 mw-75 mx-auto">
        Flexibilidad y seguridad para que recibas tus productos como prefieras.
      </p>
    </div>

    <div class="row mb-5 g-4">
      <div class="col-12 text-center mb-2">
        <h3 class="fw-bold fs-3">¿Cómo quieres recibir tu pedido?</h3>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #e3f2fd; color: #0d6efd;">
            <i class="bi bi-lightning-charge-fill fs-2"></i>
          </div>
          <h4 class="fw-bold">Envío Express</h4>
          <p class="text-muted small">Ideal para urgencias y productos frescos.</p>
          <hr class="my-3 opacity-10">
          <ul class="list-unstyled text-start small mb-0">
            <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Pedidos antes de las 13hs llegan <strong>hoy</strong>.</li>
            <li class="mb-2"><i class="bi bi-clock text-primary me-2"></i>Entrega: 14:00 - 19:00 hs.</li>
            <li><i class="bi bi-tag-fill text-danger me-2"></i>Costo: $1800 (Gratis > $70.000).</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #fff3cd; color: #ffc107;">
            <i class="bi bi-calendar-check-fill fs-2"></i>
          </div>
          <h4 class="fw-bold">Envío Programado</h4>
          <p class="text-muted small">Organiza tu semana eligiendo día y hora.</p>
          <hr class="my-3 opacity-10">
          <ul class="list-unstyled text-start small mb-0">
            <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Elige franja mañana o tarde.</li>
            <li class="mb-2"><i class="bi bi-calendar-week text-primary me-2"></i>Lunes a Sábado.</li>
            <li><i class="bi bi-piggy-bank-fill text-danger me-2"></i>Costo reducido o gratuito.</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #d1e7dd; color: #198754;">
            <i class="bi bi-shop fs-2"></i>
          </div>
          <h4 class="fw-bold">Retiro en Sucursal</h4>
          <p class="text-muted small">Pasa a buscarlo sin hacer filas.</p>
          <hr class="my-3 opacity-10">
          <ul class="list-unstyled text-start small mb-0">
            <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i>Listo en 2 horas aprox.</li>
            <li class="mb-2"><i class="bi bi-whatsapp text-primary me-2"></i>Te avisamos cuando esté listo.</li>
            <li><i class="bi bi-emoji-smile-fill text-danger me-2"></i><strong>¡Totalmente Gratis!</strong></li>
          </ul>
        </div>
      </div>
    </div>

<div class="card border-0 shadow-lg overflow-hidden rounded-4 mb-5">
      <div class="row g-0">
        <div class="col-12 col-lg-4 text-white p-5 d-flex flex-column justify-content-center" style="background-color: #cf172e;">
          <h3 class="fw-bold mb-3"><i class="bi bi-credit-card-2-front me-2"></i> Medios de Pago</h3>
          <p class="opacity-75">Tu seguridad es nuestra prioridad. Aceptamos los medios de pago más confiables para tu tranquilidad.</p>
        </div>
        
        <div class="col-12 col-lg-8 bg-white p-5 d-flex align-items-center justify-content-center">
            <div class="row w-100 text-center g-4 justify-content-center">
                
                <div class="col-6 col-md-4">
                    <div class="p-3 border rounded-3 bg-light">
                        <i class="bi bi-credit-card fs-1 text-secondary d-block mb-2"></i>
                        <span class="fw-bold text-dark">Crédito/Débito</span>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3 border rounded-3 bg-light">
                        <i class="bi bi-cash-coin fs-1 text-secondary d-block mb-2"></i>
                        <span class="fw-bold text-dark">Efectivo (Local)</span>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <h4 class="fw-bold fs-5 mb-3">¿Tienes alguna duda sobre tu zona de entrega?</h4>
      <a href="<?= site_url('contact') ?>" class="btn btn-outline-dark px-4 rounded-pill">
        Consultar Cobertura
      </a>
    </div>

  </div>
</section>

<style>
  .hover-up { transition: transform 0.2s ease; }
  .hover-up:hover { transform: translateY(-5px); cursor: default; }
</style>

<?= $this->endSection()?>