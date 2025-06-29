# TP_Proyecto_E-Commerce

![PHP](https://img.shields.io/badge/php-8.x-blue)
![CodeIgniter](https://img.shields.io/badge/framework-CodeIgniter%204-red)
![License: MIT](https://img.shields.io/badge/license-MIT-green)

---

## 📦 Descripción del Proyecto

**Quelac** es una tienda online enfocada en productos alimenticios refrigerados (quesos, fiambres, bebidas y más). Este proyecto es el trabajo práctico final de la materia _Taller de Programación I_ y está desarrollado con **PHP** (CodeIgniter 4) y **Bootstrap 5** para un diseño responsive.

Los usuarios pueden explorar productos, acceder a información institucional, consultar términos y condiciones, y contactar a la empresa mediante formularios.

---

## 🚧 Entregas del Proyecto

- ✅ **Primera Parte**: Maquetado completo del frontend (responsive, sin lógica de negocio).
- ✅ **Segunda Parte**: Funcionalidades dinámicas (catálogo, búsquedas, formularios conectados, autenticación, panel admin, etc.).

---

## 🌟 Características Principales

- **Página principal** con presentación, productos destacados y diseño visual atractivo.
- **Barra de búsqueda** integrada.
- **Diseño responsive** con Bootstrap 5.
- **Formulario de contacto** funcional.
- **Secciones informativas**: Empresa, comercialización, términos y condiciones, marketing/envíos.
- **Enlaces a redes sociales** e información de contacto.

---

## 🚀 Funcionalidades Implementadas

- **Catálogo de productos:** Visualización, búsqueda y filtrado por categoría.
- **Detalle de producto:** Página individual con información y botón para agregar al carrito.
- **Carrito de compras:** Agregar, actualizar cantidades, eliminar productos y vaciar carrito.
- **Checkout:** Confirmación de compra, guardado de órdenes y sus ítems en la base de datos.
- **Órdenes:** Listado y detalle de compras del usuario logueado.
- **Autenticación:** Registro, login y logout de usuarios.
- **Verificación de email:** Al registrarse, el usuario debe confirmar su cuenta mediante un enlace enviado a su correo electrónico. No podrá iniciar sesión hasta verificar su email.
- **Panel de administración:**
  - **Gestión de productos:** Alta, baja, edición, activación/desactivación automática por stock.
  - **Gestión de ventas:** Visualización de todas las ventas realizadas, con detalle de cada orden y usuario comprador.
  - **Gestión de usuarios:** Listado de usuarios, cambio de roles (cliente/admin), activación/desactivación de cuentas desde el panel.

---

## 💻 Tecnologías Utilizadas

- **Backend:** PHP con CodeIgniter 4
- **Frontend:** HTML5, CSS3, Bootstrap 5
- **Iconografía:** Font Awesome
- **Servidor local:** XAMPP

---

## 📁 Estructura del Proyecto

```
TP_Proyecto_E-Commerce/
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   └── Common.php
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   └── index.php
├── database/
│   └── db_quelac.sql
├── writable/
├── .env
└── README.md
```

---

## 📋 Requisitos Previos

- PHP 8.1 o superior
- XAMPP (Apache y MySQL)
- Composer (opcional, solo si usás dependencias externas)

---

## 🗄️ Base de Datos

1. **Crear la base de datos:**

   - Ingresá a phpMyAdmin o usá la terminal de MySQL.
   - Creá una base de datos nueva, por ejemplo: `db_quelac`.

2. **Importar la estructura y datos:**

   - Usá el archivo `database/db_quelac.sql` incluido en el repositorio.
   - En phpMyAdmin: seleccioná la base de datos creada, hacé clic en "Importar" y subí el archivo `.sql`.
   - O desde terminal:
     ```bash
     mysql -u root -p db_quelac < database/db_quelac.sql
     ```

3. **Configurar la conexión:**
   - Editá el archivo `.env` y asegurate de que los datos coincidan con tu entorno local:
     ```env
     database.default.hostname = localhost
     database.default.database = db_quelac
     database.default.username = root
     database.default.password =
     database.default.DBDriver = MySQLi
     ```

---

## ⚙️ Instalación y Configuración

1. **Clonar el repositorio:**

   ```bash
   git clone https://github.com/nestorgariglio/TP_Proyecto_E-Commerce.git
   ```

2. **Configurar el entorno:**

   - Renombrá `env.example` a `.env`
   - Asegurate de tener:
     ```env
     CI_ENVIRONMENT = development
     ```
   - Configurá la conexión a la base de datos como se explicó arriba.

3. **Iniciar el servidor local:**

   - Colocá el proyecto en la carpeta `htdocs` de XAMPP.
   - Iniciá Apache y MySQL desde el panel de XAMPP.
   - Accedé desde el navegador:
     ```
     http://localhost/TP_Proyecto_E-Commerce/public
     ```

4. **Para el envío de emails (verificación de cuenta):**
   - El sistema utiliza SMTP. Configurá los datos en el archivo `.env` con una cuenta válida de Gmail (o similar) y una contraseña de aplicación.
   - Ejemplo de configuración:
     ```env
     email.protocol = smtp
     email.SMTPHost = smtp.gmail.com
     email.SMTPUser = tu_correo@gmail.com
     email.SMTPPass = tu_contraseña_de_aplicación
     email.SMTPPort = 587
     email.SMTPCrypto = tls
     email.mailType = html
     email.charset = UTF-8
     email.fromEmail = tu_correo@gmail.com
     email.fromName = Quelac
     ```

---

## 👤 Usuarios de Prueba

- **Admin:**  
  Email: admin@gmail.com  
  Contraseña: admin

- **Cliente:**  
  Email: cliente@gmail.com  
  Contraseña: cliente

_Aclaración:_ El rol de administrador puede ser asignado desde el panel de gestión de usuarios, sin necesidad de modificar la base de datos manualmente.

---

## 📝 Notas

- **No es necesario configurar Cloudinary** para probar el sitio: las imágenes de productos ya están subidas y referenciadas.
- Si necesitás restablecer la base de datos, simplemente volvé a importar el archivo `.sql`.
- Para probar la verificación de email, usá un correo real y revisá la bandeja de entrada (y spam).

---

## 🚀 Uso del Sitio

- Navegá por las secciones desde la barra superior.
- Registrate o iniciá sesión para comprar.
- Como admin, gestioná productos, ventas y usuarios desde el panel de administración.

---

## 👤 Créditos

- **Desarrolladores:** Gariglio, Nestor David y Zayas Luciano Andres

---

## 📝 Licencia

Este proyecto está bajo la licencia **MIT**. Consultá el archivo `LICENSE` para más detalles.
