<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/TP_Proyecto_E-Commerce/public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <title>Quelac</title>
</head>
    <body>
        
        <!----------------------------------- Comercialización ------------------------------------>
        <section id="commercialization" class="container py-5">
            <div class="row g-4">
                <!-- Columna izquierda -->
                <div class="col-12 col-lg-6">
                    <h4 class="text-lg fw-bold" class="text-center mb-3" style="font-family: 'Jeju Hallasan', cursive;">
                        En Quelac te ofrecemos una amplia variedad de productos para tu mesa diaria
                    </h4>
                    
                    <!-- Imagen de productos -->
                    <!-- <img src="/TP_Proyecto_E-Commerce/public/assets/img/productos.png" alt="Productos Quelac" class="img-fluid rounded mb-4"> -->
                    
                    <div class="d-flex flex-wrap mt-2">
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Lacteos</p>
                            <li>Leche entera y descremada</li>
                            <li>Queso cremoso</li>
                            <li>Queso barra</li>
                            <li>Queso rallado</li>
                            <li>Manteca y margarina</li>
                            <li>Yogures bebibles y firmes</li>
                        </ul>
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Fiambrería</p>
                            <li>Jamón cocido</li>
                            <li>Jamón crudo</li>
                            <li>Salame picado fino</li>
                            <li>Mortadela</li>
                            <li>Queso saborizado</li>
                            <li>Bondiola y lomito</li>
                        </ul>
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Panificados y acompañamientos</p>
                            <li>Galletitas saladas</li>
                            <li>Pan lactal</li>
                            <li>Tostadas</li>
                            <li>Grisines</li>
                        </ul>
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Dulces y tentaciones</p>
                            <li>Dulce de leche</li>
                            <li>Mermeladas</li>
                            <li>Alfajores</li>
                            <li>Chocolates</li>
                            <li>Caramelos surtidos</li>
                        </ul>
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Despensa Esencial</p>
                            <li>Harina</li>
                            <li>Aceite</li>
                            <li>Azúcar</li>
                            <li>Fideos secos</li>
                            <li>Arroz</li>
                            <li>Salsas enlatadas</li>
                        </ul>
                        <ul class=" border border-black border-2 rounded-4 mx-1 p-2 list-unstyled" style="width: 35%;">
                            <p class="text-lg fw-bold text-center">Bebidas</p>
                            <li>Gaseosas</li>
                            <li>Jugos</li>
                            <li>Cerveza</li>
                            <li>Vino</li>
                            <li>Fernet</li>
                        </ul>
                    </div>

                    <!-- Fila de imágenes de medios de pago -->
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <img src="<?= base_url('assets/img/pagos.jpeg') ?>" alt="Medios de pago" class="img-fluid rounded" style="max-width: 300px;">
                        <img src="<?= base_url('assets/img/envios.jpeg') ?>" alt="Formas de envíos" class="img-fluid rounded" style="max-width: 300px;">
                    </div>
                </div>

                <!-- Columna derecha -->
                <div class="col-12 col-lg-6">
                    <h4 class="text-lg fw-bold text-center" class="text-center mb-4" style="font-family: 'Jeju Hallasan', cursive;">
                        Nuestra variedad de mejores quesos
                    </h4>

                    <!-- Tarjetas de quesos -->
                    <div class="row g-4">
                        <!-- Tarjeta 1 -->
                        <div class="col-12 col-md-6">
                            <div class="card h-100 shadow-sm rounded">
                                <img src="<?= base_url('assets/img/camembert.jpg') ?>" class="rounded-top img-fluid" alt="Camembert">
                                <div class="card-body">
                                    <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">
                                        Delicado, cremoso y con una corteza aterciopelada. Ideal para una picada elegante o una cena especial. Un clásico francés que derrite corazones.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 2 -->
                        <div class="col-12 col-md-6">
                            <div class="card h-100 shadow-sm rounded">
                                <img src="<?= base_url('assets/img/pepato.png') ?>" class="rounded-top img-fluid" alt="Pepato">
                                <div class="card-body d-flex align-items-end">
                                    <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">
                                        Queso semiduro con granos de pimienta negra que le dan un toque picante y sabroso. Perfecto para los que buscan intensidad en cada bocado.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjeta 3 -->
                        <div class="col-12 col-md-6">
                            <div class="card h-100 shadow-sm rounded">
                                <img src="<?= base_url('assets/img/ahumado.jpg') ?>" class="rounded-top img-fluid" alt="Ahumado">
                                <div class="card-body">
                                    <p class="card-text" style="font-family: 'Jeju Hallasan', cursive;">
                                        Queso Ahumado, sabor suave con un toque irresistible. Textura firme y aroma envolvente. Ideal para picadas y rallado para acompañar las pastas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>