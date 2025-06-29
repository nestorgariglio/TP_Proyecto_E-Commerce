<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<section class="container" style="padding-top: 8rem;">
  <?php if(session('user_role') == 'admin') :?>
    <h2 class="fw-bold mb-4">Gestión de Usuarios</h2>
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user): ?>
            <tr>
              <td><?= esc($user['id']) ?></td>
              <td><?= esc($user['name']) ?></td>
              <td><?= esc($user['email']) ?></td>
              <td>
                <?= esc($user['role']) ?>
              </td>
              <td>
                <?php if (!isset($user['is_active']) || $user['is_active']): ?>
                  <span class="badge bg-success">Activo</span>
                <?php else: ?>
                  <span class="badge bg-secondary">Inactivo</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if ($user['id'] !== session('user_id')): ?>
                  <form action="<?= site_url('admin/users/active/' . $user['id']) ?>" method="post" class="d-inline">
                    <button type="submit" class="btn btn-sm btn-warning">
                      <?= (!isset($user['is_active']) || $user['is_active']) ? 'Desactivar' : 'Activar' ?>
                    </button>
                  </form>
                <?php endif; ?>
                <?php if ($user['id'] !== session('user_id')): ?>
                  <form action="<?= site_url('admin/users/role/' . $user['id']) ?>" method="post" class="d-inline">
                    <button type="submit" class="btn btn-sm btn-secondary">Cambiar Rol</button>
                  </form>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
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
<?= $this->endSection() ?>