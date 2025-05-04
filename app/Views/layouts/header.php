<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/TP_Proyecto_E-Commerce/public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
</body>
</html>
<header>
    <div class="d-flex flex-column align-items-center justify-content-center top text-white" style="background-color:#de062b; gap: 34px; height: auto; min-height: 180px;">
        <div class="container d-flex flex-column gap-4">
            <div class="row align-items-center justify-content-between">
                <!-- Logo -->
                <div class="col-12 col-md-3 text-center mb-3 mb-md-0">
                    <a href="./">
                        <img
                            class="logo-quelac img-fluid"
                            src="<?= base_url('assets/img/logo-quelac.jpeg') ?>"
                            alt="Logo Quelac"
                            style="max-width: 150px;"
                        />
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="col-12 col-md-6">
                    <form class="d-flex align-items-center">
                        <input 
                            type="text" 
                            class="form-control me-2" 
                            placeholder="Buscar..." 
                            style="min-width: 0;"
                        />
                        <button type="submit" class="btn btn-light" id="btn-search">
                            <script>
                                const btnSearch = document.getElementById('btn-search'); //Obtengo el btn por su id
                                btnSearch.addEventListener('click', function(event) {
                                    event.preventDefault(); // Evito la recarga de la página
                                    const searchInput = document.querySelector('input[type="text"]'); // Obtengo el input de búsqueda
                                    searchInput.value = ""; // Limpio el valor del input
                                })
                            </script>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>


                <!-- Placeholder for future implementation -->
                <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end">
                    <!-- Future buttons or links -->
                </div>
            </div>
            <div class="d-none d-md-flex justify-content-around align-items-center w-100 h-100 mt-2">
                <a href="./" class="text-decoration-none text-white">Principal</a>
                <a href="about" class="text-decoration-none text-white">Quienes Somos</a>
                <a href="commercialization" class="text-decoration-none text-white">Comercialización</a>
                <a href="contact" class="text-decoration-none text-white">Contacto</a>
                <a href="terms" class="text-decoration-none text-white">Términos</a>
            </div>
        </div>
    </header>  
