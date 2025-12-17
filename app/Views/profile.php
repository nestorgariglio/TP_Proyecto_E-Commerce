<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="container" style="padding-top: 8rem; padding-bottom: 4rem;">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <h2 class="fw-bold mb-4">Mi Perfil</h2>
            
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-person-circle fs-1 text-secondary"></i>
                        </div>
                        <h4 class="mt-2"><?= esc($user['name']) ?></h4>
                        <p class="text-muted"><?= esc($user['email']) ?></p>
                        <span class="badge bg-secondary"><?= ucfirst(esc($user['role'])) ?></span>
                    </div>

                    <form action="<?= site_url('profile/edit') ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre Completo</label>
                            <input type="text" name="name" class="form-control" value="<?= esc($user['name']) ?>">
                        </div>

                        <hr class="my-4">
                        <h5 class="fw-bold mb-3">Cambiar Contraseña</h5>
                        <p class="small text-muted">Deja estos campos vacíos si no quieres cambiar tu clave.</p>

                        <div class="mb-3">
                            <label class="form-label">Nueva Contraseña</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmar Contraseña</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary" style="background-color: #cf172e;">
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection()?>