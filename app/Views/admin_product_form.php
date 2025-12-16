<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem; max-width: 600px;">
  <h2 class="fw-bold mb-4"><?= isset($product) ? 'Editar' : 'Agregar' ?> Producto</h2>

  <form method="post" enctype="multipart/form-data" action="<?= isset($product) ? site_url('admin/products/update/'.$product['id']) : site_url('admin/products/save') ?>" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input 
        type="text" 
        class="form-control" 
        id="name" 
        name="name" 
        value="<?= isset($product) ? esc($product['name']) : old('name') ?>"
      >
      <?php if(session('errors.name')): ?>
        <div class="text-danger small"><?= session('errors.name')?></div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descripción</label>
      <textarea 
        class="form-control" 
        id="description" 
        name="description" 
        rows="3"
      >
        <?= isset($product) ? esc($product['description']) : '' ?>
      </textarea>
      <?php if(session('errors.description')): ?>
        <div class="text-danger small"><?= session('errors.description')?></div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Precio</label>
      <input 
        type="number" 
        class="form-control" 
        id="price" 
        name="price" 
        step="0.01" 
        min="0" 
        value="<?= isset($product) ? esc($product['price']) : old('price') ?>"
      >
      <?php if(session('errors.price')): ?>
        <div class="text-danger small"><?= session('errors.price')?></div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label for="image_file" class="form-label">Imagen (subir archivo)</label>
      <input type="file" class="form-control" id="image_file" name="image_file" accept="image/*">
      <small class="text-muted">O pega una URL de Cloudinary:</small>
      <input 
        type="url" 
        class="form-control mt-1" 
        id="image" 
        name="image" 
        value="<?= isset($product) ? esc($product['image']) : old('image') ?>"
      >
      <?php if(session('errors.image')): ?>
        <div class="text-danger small"><?= session('errors.image')?></div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Categoría</label>
      <select class="form-select" id="category" name="category">
        <option value="">Seleccionar...</option>
        <option value="Queso" <?= (isset($product) && esc($product['category']) == 'Queso') ? 'selected' : '' ?>>Queso</option>
        <option value="Fiambre" <?= (isset($product) && esc($product['category']) == 'Fiambre') ? 'selected' : '' ?>>Fiambre</option>
        <option value="Panificado" <?= (isset($product) && esc($product['category']) == 'Panificado') ? 'selected' : '' ?>>Panificado</option>
      </select>
      <?php if(session('errors.category')): ?>
        <div class="text-danger small"><?= session('errors.category')?></div>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label for="stock" class="form-label">Stock</label>
      <input 
        type="number" 
        class="form-control" 
        id="stock" 
        name="stock" 
        min="0" 
        value="<?= isset($product) ? esc($product['stock']) : '' ?>"
      >
      <?php if(session('errors.stock')): ?>
        <div class="text-danger small"><?= session('errors.stock')?></div>
      <?php endif; ?>
    </div>
    
    <div class="mb-3">
      <label for="is_active" class="form-label">Estado</label>
      <select class="form-select" id="is_active" name="is_active">
        <option value="1" <?= (!isset($product) || esc($product['is_active'])) ? 'selected' : '' ?>>Activo</option>
        <option value="0" <?= (isset($product) && esc(!$product['is_active'])) ? 'selected' : '' ?>>Inactivo</option>
      </select>
    </div>

    <div class="d-flex justify-content-end gap-2">
      <a href="<?= site_url('/admin/products') ?>" class="btn btn-outline-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary" style="background-color: #cf172e;"><?= isset($product) ? 'Actualizar' : 'Agregar' ?></button>
    </div>
  </form>
</section>

<?= $this->endSection()?>