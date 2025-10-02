<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
  <?php if(session('user_role') == 'admin') :?>
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold">Administrar Productos</h2>
      <a href="<?= site_url('admin/products/create') ?>" class="btn btn-success">Agregar Producto</a>
    </div>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($products)): ?>
            <?php foreach($products as $product): ?>
              <tr>
                <td>1</td>
                <td>
                  <img src="<?= esc($product['image'])?>" alt="<?= esc($product['name'])?>" style="width: 60px; height: 60px; object-fit: cover;" class="rounded shadow-sm">
                </td>
                <td><?= esc($product['name'])?></td>
                <td><?= esc($product['category'])?></td>
                <td>$<?= esc($product['price'])?></td>
                <td><?= esc($product['stock'])?></td>
                <td>
                  <?php if($product['is_active']): ?>
                    <span class="badge bg-success">Activo</span>
                  <?php else: ?>
                    <span class="badge bg-secondary">Inactivo</span>
                  <?php endif; ?>
                </td>
                <td>
                  <a href="<?= site_url('admin/products/edit/' . $product['id']) ?>" class="btn btn-sm btn-primary">Editar</a>
                  <?php if($product['is_active']): ?>
                    <form action="<?= site_url('admin/products/delete/' . esc($product['id'])) ?>" method="post" class="d-inline">
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Dar de baja este producto?')">Desactivar</button>
                    </form>
                  <?php else: ?>
                    <form action="<?= site_url('admin/products/active/' . esc($product['id'])) ?>" method="post" class="d-inline">
                      <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('¿Dar de baja este producto?')">Activar</button>
                    </form>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="8" class="text-center">No hay productos cargados.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
      <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="card p-3">
          <h3 class="fs-4 p-2">
            Usted no tiene acceso a este recurso.
          </h3>
          <a href="<?= site_url('/')?>" class="btn bg-primary-color text-white">Volver</a>
        </div>
      </div>
  <?php endif; ?>
</section>

<?= $this->endSection()?>