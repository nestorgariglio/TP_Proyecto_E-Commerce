<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/TP_Proyecto_E-Commerce/public/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <title>Quelac</title>
</head>
<body>
    <section id="contact" class="container py-5">
        <h2 class="text-center mb-4" >Contáctenos</h2>

        <p class="text-danger fw-bold text-center fs-4" >¡Nos encanta escucharte!</p>
        <p class="text-center mx-auto" style="max-width: 800px;" >
        En <strong >Quelac</strong> trabajamos cada día para llevarte lo mejor en quesos, fiambres, productos de almacén y bebidas. <br>
        Si tenés alguna duda, sugerencia, consulta sobre nuestros productos o simplemente querés saber más sobre lo que ofrecemos, no dudes en escribirnos. <br>
        <span class="fw-bold text-danger">Tu mensaje es importante para nosotros.</span> Estamos para ayudarte.
        </p>


        <form class="mt-4" style="max-width: 700px; margin: 0 auto;">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre (Obligatorio)</label>
                <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email (Obligatorio)</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto (Obligatorio)</label>
                <input type="text" class="form-control" id="asunto" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje (Obligatorio)</label>
                <textarea class="form-control" id="mensaje" rows="5" required></textarea>
            </div>
        
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terminos" required>
                <label class="form-check-label" for="terminos">
                Acepto los <a href="http://localhost/TP_Proyecto_E-Commerce/public/terms">Términos y Usos</a> de este sitio
                </label>
            </div>
        
            <button type="submit" class="btn btn-dark" id="contact-btn">
                <script>
                    const contactBtn = document.getElementById('contact-btn');

                    contactBtn.addEventListener('click', function(event) {
                        event.preventDefault(); // Evitar el comportamiento por defecto del botón

                        // Seleccionar los elementos del formulario
                        const formInputs = document.querySelectorAll('input[type="text"], input[type="email"]');
                        const formCheckBox = document.querySelector('#terminos'); // Checkbox
                        const textArea = document.querySelector('#mensaje'); // Textarea

                        // Validar que todos los campos estén llenos
                        let allFieldsFilled = true;
                        formInputs.forEach((input) => {
                            if (input.value.trim() === "") {
                                allFieldsFilled = false;
                            }
                        });

                        // Validar si el textarea está vacío
                        const isTextAreaEmpty = textArea.value.trim() === "";

                        // Validar si la checkbox no está marcada
                        const isCheckBoxUnchecked = !formCheckBox.checked;

                        // Mostrar mensaje de error si alguna validación falla
                        console.log("All fields filled:", allFieldsFilled);
                        console.log("Textarea empty:", isTextAreaEmpty);
                        console.log("Checkbox unchecked:", isCheckBoxUnchecked);

                        if (!allFieldsFilled || isTextAreaEmpty || isCheckBoxUnchecked) {
                            alert("Error al enviar. Verifique los datos e intente nuevamente");
                            return; // Salir de la función si hay un error
                        }

                        // Limpiar los valores de los inputs y textarea
                        formInputs.forEach((input) => input.value = "");
                        textArea.value = "";
                        formCheckBox.checked = false;

                        // Mostrar mensaje de éxito
                        alert("Mensaje Enviado :D");
                    });
                </script>
                Enviar
            </button>
        </form>


            <!-- Datos de contacto de la empresa -->
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                <h5 class="mb-3">Datos de la Empresa</h5>
                <p><strong>Nombre del titular:</strong> Quelac</p>
                <p><strong>Razón social:</strong> Quelac SRL</p>
                <p><strong>Domicilio legal:</strong>Teniente Ibañez 1356</p>
                <p><strong>Teléfono:</strong> 3794077353</p>
                <p><strong>Email:</strong> quelac@gmail.com</p>
                <p><strong>Instagram:</strong> @quelac_corrientes</p>
                </div>
            </div>
        </div>



    </section>
</body>
</html>
<!------------------------------------Información de Contacto----------------------------------->

