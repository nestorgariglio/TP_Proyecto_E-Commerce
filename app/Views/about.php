<?= $this->extend('layouts/base')?>
<?= $this->section('content')?>

<section class="w-100 position-relative" style="background-image: url('https://images.unsplash.com/photo-1625684742767-422d64f268a0?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center; height: 400px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.6);"></div>
    <div class="container h-100 position-relative d-flex flex-column justify-content-center align-items-center text-center text-white">
        <h1 class="display-3 fw-bold mb-3">Nuestra Pasión, Tu Mesa</h1>
        <p class="fs-4 mw-75">Llevando los mejores sabores a los hogares de Corrientes desde 2016.</p>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <h2 class="fw-bold mb-3" style="color: #cf172e;">Más que una Fiambrería</h2>
            <p class="lead text-muted mb-4">
                Lo que comenzó en 2016 como un pequeño emprendimiento familiar en el corazón de Corrientes Capital, hoy se ha convertido en un referente de calidad gastronómica en la región.
            </p>
            <p>
                En <strong>Quelac</strong>, entendemos que una picada no es solo comida; es un momento de encuentro. Nacimos con la visión de ofrecer una alternativa superior a los supermercados tradicionales: queríamos que el cliente pudiera elegir el grosor exacto de su jamón, probar un queso antes de llevarlo y recibir una sonrisa en cada visita.
            </p>
            <p>
                Gracias a la confianza de nuestros vecinos, pasamos de un local a contar hoy con <strong>6 sucursales</strong> estratégicamente ubicadas, manteniendo intacta nuestra esencia: frescura garantizada y atención personalizada. Ahora, damos el siguiente paso con nuestra tienda online, llevando la experiencia Quelac directamente a tu puerta.
            </p>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://images.unsplash.com/photo-1558221693-89a565d7ecd8?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-3 shadow-sm mb-3" alt="Quesos">
                </div>
                <div class="col-6 mt-5">
                    <img src="https://images.unsplash.com/photo-1738231726433-777327af1c68?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-3 shadow-sm" alt="Fiambres">
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 py-5 my-5 bg-light rounded-4">
        <div class="col-12 text-center mb-3">
            <h3 class="fw-bold">¿Por qué elegirnos?</h3>
        </div>
        
        <div class="col-12 col-md-4 text-center px-4">
            <div class="mb-3 text-danger">
                <i class="bi bi-award-fill fs-1"></i>
            </div>
            <h5 class="fw-bold">Calidad Premium</h5>
            <p class="text-muted small">Trabajamos únicamente con primeras marcas y productores artesanales seleccionados para asegurar el mejor sabor.</p>
        </div>

        <div class="col-12 col-md-4 text-center px-4">
            <div class="mb-3 text-danger">
                <i class="bi bi-truck fs-1"></i>
            </div>
            <h5 class="fw-bold">Cadena de Frío</h5>
            <p class="text-muted small">Nuestra logística propia garantiza que tus productos lleguen frescos, manteniendo la temperatura ideal desde la heladera a tu casa.</p>
        </div>

        <div class="col-12 col-md-4 text-center px-4">
            <div class="mb-3 text-danger">
                <i class="bi bi-heart-fill fs-1"></i>
            </div>
            <h5 class="fw-bold">Pasión Correntina</h5>
            <p class="text-muted small">Somos una empresa 100% local. Conocemos los gustos de nuestra gente y trabajamos día a día para superarnos.</p>
        </div>
    </div>

    <div class="my-5">
        <div class="text-center mb-5">
            <h3 class="fw-bold fs-2">Mentes detrás de Quelac</h3>
            <p class="text-muted mw-50 mx-auto">La combinación perfecta entre tradición comercial e innovación tecnológica.</p>
        </div>
        
        <div class="row justify-content-center g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 hover-top">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 mx-auto p-1 border border-2 border-danger rounded-circle" style="width: 130px; height: 130px;">
                            <img src="https://images.unsplash.com/photo-1740252117013-4fb21771e7ca?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Nestor" class="rounded-circle w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold mb-1">Néstor David Gariglio</h4>
                        <span class="badge bg-danger mb-3">Co-Founder & CEO</span>
                        <p class="text-muted small">
                            Apasionado por el desarrollo de negocios y la tecnología. Néstor lidera la visión estratégica de Quelac, asegurando que la expansión digital mantenga la calidez humana que nos caracteriza.
                        </p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                            <a href="https://www.linkedin.com/in/nestor-gariglio/" class="text-secondary hover-red" target="_blank"><i class="bi bi-linkedin fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 hover-top">
                    <div class="card-body text-center p-4">
                        <div class="mb-3 mx-auto p-1 border border-2 border-danger rounded-circle" style="width: 130px; height: 130px;">
                            <img src="https://images.unsplash.com/photo-1740252117012-bb53ad05e370?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Luciano" class="rounded-circle w-100 h-100 object-fit-cover">
                        </div>
                        <h4 class="fw-bold mb-1">Luciano Zayas</h4>
                        <span class="badge bg-danger mb-3">Co-Founder & CTO</span>
                        <p class="text-muted small">
                            Experto en arquitectura de software y logística. Luciano es el cerebro detrás de nuestra plataforma de e-commerce, optimizando cada proceso para que tu pedido llegue en tiempo récord.
                        </p>
                        <div class="d-flex justify-content-center gap-3 mt-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <h3 class="fw-bold mb-3">¿Listo para probar lo mejor de Corrientes?</h3>
        <a href="<?= site_url('catalog') ?>" class="btn btn-lg text-white px-5 rounded-pill shadow" style="background-color: #cf172e;">
            Ir al Catálogo <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>

</section>

<style>
    .object-fit-cover { object-fit: cover; }
    .hover-top { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-top:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important; }
    .hover-red:hover { color: #cf172e !important; }
</style>

<?= $this->endSection() ?>