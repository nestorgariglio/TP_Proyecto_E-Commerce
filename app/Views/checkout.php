<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <h2 class="fw-bold mb-4">Confirmar Compra</h2>

  <form 
    method="post" 
    action="<?= site_url('checkout/process') ?>" 
    id="checkoutForm"
  >
    <div class="row">
      <div class="col-12 col-md-7">

        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-white fw-bold">
            1. Método de Entrega
          </div>
          <div class="card-body">
            <div class="form-check mb-2">
              <input 
                class="form-check-input" 
                type="radio"
                name="shipping_method"
                id="pickup"
                value="pickup"
                checked
                onchange="toggleShipping(false)"
              >
              <label class="form-check-label" for="pickup">
                Retiro en Local (Gratis) - Corrientes Capital
              </label>
            </div>
            <div class="form-check">
              <input 
                class="form-check-input" 
                type="radio" 
                name="shipping_method"
                id="delivery"
                value="delivery"
                onchange="toggleShipping(true)"
              >
              <label class="form-check-label" for="delivery">
                Envío a Domicilio (+$2000)
              </label>
            </div>
            <?php 
                $totalCarrito = 0;
                foreach($cart as $item) $totalCarrito += $item['price'] * $item['quantity'];
                $faltante = 70000 - $totalCarrito;
            ?>

            <?php if($totalCarrito < 70000): ?>
                <div class="alert alert-info py-2 small">
                    <i class="bi bi-info-circle-fill me-1"></i>
                    ¡Te faltan <strong>$<?= $faltante ?></strong> para tener <strong>Envío Gratis</strong>!
                    <a href="<?= site_url('catalog') ?>" class="alert-link">Agregar más</a>
                </div>
            <?php else: ?>
                <div class="alert alert-success py-2 small">
                    <i class="bi bi-stars me-1"></i>
                    ¡Felicidades! Tienes <strong>Envío Gratis</strong> en esta compra.
                </div>
            <?php endif; ?> 

            <div class="mt-3 d-none" id="addressField">
              <label for="address" class="form-label">Dirección de entrega</label>
              <input 
                type="text" 
                class="form-control" 
                id="address" 
                name="address" 
                placeholder="Ej: Calle False 123, Piso 2"
              >
            </div>
          </div>
        </div>

        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-white fw-bold">2. Método de Pago</div>
          <div class="card-body">
            <div class="form-check mb-2">
              <input 
                class="form-check-input" 
                type="radio" 
                name="payment_method"
                id="cash"
                value="cash"
                checked
                onchange="toggleCard(false)"
              >
              <label class="form-check-label" for="cash">
                Efectivo / Transferencia (Contra entrega)
              </label>
            </div>
            <div class="form-check">
              <input 
                class="form-check-input" 
                type="radio" 
                name="payment_method" 
                id="card" 
                value="card"
                onchange="toggleCard(true)"
              >
              <label class="form-check-label" for="card">
                Tarjeta de Débito/Crédito
              </label>
            </div>

            <div class="mt-3 p-3 bg-light rounded d-none" id="cardFields">
              <div class="mb-3">
                <label class="form-label">Número de Tarjeta</label>
                <input 
                  class="form-control" 
                  type="text" 
                  placeholder="0000 0000 0000 0000" 
                  maxlength="16"
                  oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                >
              </div>
              <div class="row">
                <div class="col-6">
                  <label class="form-label">
                    Vencimiento
                  </label>
                  <input class="form-control" type="text" placeholder="MM/AA">
                </div>
                <div class="col-6">
                  <label class="control-label">CVC</label>
                  <input 
                    class="form-control" 
                    type="text" 
                    placeholder="123" 
                    maxlength="3"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"  
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-12 col-md-5">
        <div class="card shadow-sm">
          <div class="card-header bg-white fw-bold">Resumen del Pedido</div>
          <div class="card-body">
            <ul class="list-group list-group-flush mb-3">
              <?php $total = 0; ?>
              <?php foreach($cart as $item): ?>
                <?php $subtotal = esc($item['price']) * esc($item['quantity']); $total += $subtotal; ?>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0"><?= esc($item['name']) ?></h6>
                    <small class="text-muted">Cant: <?= esc($item['quantity']) ?></small>
                  </div>
                  <span class="text-muted">$<?= $subtotal ?></span>
                </li>
              <?php endforeach; ?>

              <li 
                class="list-group-item d-flex justify-content-between lh-sm text-muted" id="shippingRow"
              >
                <span>Consto de envío</span>
                <span id="shippingDisplay">$0</span>
              </li>

              <li class="list-group-item d-flex justify-content-between">
                <span>Total (ARS)</span>
                <input type="hidden" id="baseTotal" value="<?= $total ?>">
                <strong id="totalDisplay" style="color: #cf172e;"><?= $total ?></strong>
              </li>
            </ul>

            <button 
              type="submit"
              class="btn btn-primary w-100 btn-lg"
              style="background-color: #cf172e;"
            >
              Confirmar Pedido
            </button>
            <a 
              href="<?= site_url('cart') ?>" 
              class="btn btn-link w-100 text-center text-muted mt-2"
            >
              Volver al carrito 
            </a>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>

<script>
  function toggleShipping(isDelivery) {
    const addressField = document.getElementById('addressField');
    const shippingDisplay = document.getElementById('shippingDisplay');
    const totalDisplay = document.getElementById('totalDisplay');
    const baseTotal = parseFloat(document.getElementById('baseTotal').value);
    const addressInput = document.getElementById('address');

    const threshold = 70000;
    let shippingCost = 2000;

    if (isDelivery) {
      addressField.classList.remove('d-none');
      addressInput.required = true;

      if (baseTotal >= threshold) {
        shippingCost = 0;
      }

      if (shippingCost === 0) {
        shippingDisplay.innerHTML = '<span class="text-success fw-bold">¡Gratis! (Promo > $70k)</span>';
      } else {
        shippingDisplay.innerText = '$' + shippingCost;
      }
      totalDisplay.innerText = '$' + (baseTotal + shippingCost);
    } else {
      addressField.classList.add('d-none');
      addressInput.required = false;
      addressInput.value = '';
      shippingDisplay.innerText = '$0';
      totalDisplay.innerText = '$' + baseTotal;
    }
  }

  function toggleCard(isCard) {
    const cardFields = document.getElementById('cardFields');
    const inputs = cardFields.getElementsByTagName('input');

    if (isCard) {
      cardFields.classList.remove('d-none');
      for(let input of inputs) input.required = true;
    } else {
      cardFields.classList.add('d-none');
      for(let input of inputs) input.required = false;
    }
  }
</script>
<?= $this->endSection()?>