# TP_Proyecto_E-Commerce

![PHP](https://img.shields.io/badge/php-8.x-blue)
![CodeIgniter](https://img.shields.io/badge/framework-CodeIgniter%204-red)
![License: MIT](https://img.shields.io/badge/license-MIT-green)

---

## 📦 Descripción del Proyecto

**Quelac** es una tienda online enfocada en productos alimenticios refrigerados (quesos, fiambres, bebidas y más). Este proyecto forma parte del trabajo práctico final de la materia _Taller de Programación I_ y está desarrollado con PHP utilizando el framework **CodeIgniter 4** y **Bootstrap 5** para un diseño responsive.

Los usuarios pueden explorar productos, acceder a información institucional, consultar términos y condiciones, y contactar a la empresa mediante formularios.

---

## 🚧 Entregas del Proyecto

- ✅ **Primera Parte**: Maquetado completo del frontend (responsive, sin lógica de negocio).
- ✅ **Segunda Parte**: Se agregarán funcionalidades dinámicas (catálogo de productos, búsquedas, formularios conectados, etc.).

---

## 🌟 Características Principales

- **Página principal** con presentación, productos destacados y diseño visual atractivo.
- **Barra de búsqueda** integrada.
- **Diseño responsive** con Bootstrap 5.
- **Formulario de contacto** funcional (segunda entrega).
- **Secciones informativas**: Empresa, comercialización, términos y condiciones.
- **Enlaces a redes sociales** e información de contacto.

---

## 🚀 Funcionalidades Implementadas

- **Catálogo de productos:** Visualización, búsqueda y filtrado por categoría.
- **Detalle de producto:** Página individual con información y botón para agregar al carrito.
- **Carrito de compras:** Agregar, actualizar cantidades, eliminar productos y vaciar carrito.
- **Checkout:** Confirmación de compra, guardado de órdenes y sus ítems en la base de datos.
- **Órdenes:** Listado y detalle de compras del usuario logueado.
- **Autenticación:** Registro, login y logout de usuarios.
- **Panel de administración:** (En desarrollo) Gestión de productos para usuarios administradores.
- **Vistas informativas:** Quiénes somos, contacto, términos y condiciones, marketing/envíos.

---

## 💻 Tecnologías Utilizadas

- **Backend**: PHP con CodeIgniter 4
- **Frontend**: HTML5, CSS3, Bootstrap 5
- **Iconografía**: Font Awesome
- **Servidor local**: XAMPP

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

1. **Crear la base de datos:**d

   - Ingresá a phpMyAdmin o usá la terminal de MySQL.
   - Creá una base de datos nueva, por ejemplo: `db_quelac`.

2. **Importar la estructura y datos:**

   - Usá el archivo `database/db_quelac.sql` incluido en el repositorio.
   - En phpMyAdmin: seleccioná la base de datos creada, hacé clic en "Importar" y subí el archivo `.sql`.
   - O desde terminal:
     ```bash
     mysql -u root -p quelac < database/quelac.sql
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

---

## 👤 Usuarios de Prueba

- **Admin:**  
  Email: admin@gmail.com  
  Contraseña: admin

- **Cliente:**  
  Email: cliente@gmail.com  
  Contraseña: cliente

---

## 📝 Notas

- **No es necesario configurar Cloudinary** para probar el sitio: las imágenes de productos ya están subidas y referenciadas.
- Si necesitás restablecer la base de datos, simplemente volvé a importar el archivo `.sql`.

---

## 🚀 Uso del Sitio

- Navegá por las secciones desde la barra superior.
- Registrate o iniciá sesión para comprar.
- Como admin, gestioná productos desde el panel de administración.

---

## 👤 Créditos

- **Desarrolladores:** Gariglio, Nestor David y Zayas Luciano Andres

---

## 📝 Licencia

Este proyecto está bajo la licencia **MIT**. Consultá el archivo `LICENSE` para más detalles.
