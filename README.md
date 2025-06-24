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

## ⚙️ Instalación y Configuración

1. **Clonar el repositorio**:

   ```bash
   git clone https://github.com/nestorgariglio/TP_Proyecto_E-Commerce.git
   ```

2. **Configurar el entorno**:

   - Renombrar el archivo `env.example` a `env`
   - Asegurarse de tener:
     ```env
     CI_ENVIRONMENT = development
     ```
   - Configurar conexión a la base de datos en `.env` o `app/Config/Database.php`

3. **Instalar dependencias (si usás Composer)**:

   ```bash
   composer install
   ```

4. **Iniciar el servidor local**:
   - Colocar el proyecto en la carpeta `htdocs` de XAMPP
   - Acceder desde el navegador:
     ```
     http://localhost/TP_Proyecto_E-Commerce/public
     ```

---

## 🚀 Uso del Sitio

- Navegar desde la barra superior a secciones como:
  - Principal
  - Quiénes somos
  - Comercialización
  - Contacto
  - Términos y usos
- Completar formularios (contacto, registro, login)
- Ver productos, agregarlos al carrito y realizar compras
- Consultar historial de compras

---

## 👤 Créditos

- **Desarrollador:** Gariglio, Nestor David y Zayas Luciano Andres
- **Framework:** CodeIgniter 4
- **Diseño visual:** Bootstrap 5

---

## 📝 Licencia

Este proyecto está bajo la licencia **MIT**. Consultá el archivo `LICENSE` para más detalles.
