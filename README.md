# 🧊 SII-BMS - Sistema de Información Integral

Repositorio del proyecto web para la optimización de procesos en **BMS Ingeniería de Refrigeración Industrial SAS**.

Este sistema busca mejorar la gestión de inventario de herramientas, mantenimiento, documentación administrativa y pagos tributarios de la empresa.

---

## 📌 Descripción

**SII-BMS** es una solución web que automatiza y centraliza los procesos internos de la empresa, permitiendo mayor eficiencia y trazabilidad en la operación diaria.

### Módulos principales:
- Gestión de herramientas e inventario.
- Registro y control de mantenimientos.
- Almacenamiento de registros administrativos.
- Generación de reportes e historial técnico.
- Gestión de pagos de impuestos con descarga en PDF.

---

## 🛠 Tecnologías utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** Blade / Filament / HTML / CSS / JavaScript
- **Base de datos:** MySQL
- **Herramientas adicionales:** Composer, Laravel Mix

---

## 🚀 Instalación

```bash
# 1. Clonar el repositorio
git clone https://github.com/TU_USUARIO/SII-BMS.git
cd SII-BMS

# 2. Instalar dependencias
composer install
npm install && npm run dev

# 3. Configurar archivo de entorno
cp .env.example .env
php artisan key:generate

# 4. Crear la base de datos y ejecutar migraciones
php artisan migrate

# 5. Levantar el servidor
php artisan serve
````

---

## 📦 Funcionalidades (En desarrollo)

* [x] Módulo de herramientas (CRUD)
* [x] Registro de mantenimientos
* [ ] Generación de reportes en PDF
* [ ] Gestión de pagos tributarios
* [ ] Módulo de control de usuarios y roles

---

## 📁 Estructura básica del proyecto

```
├── app
├── resources
├── routes
├── database
├── public
└── ...
```

---

## 🧑‍💼 Uso interno

Este proyecto es de uso exclusivo para **BMS Ingeniería de Refrigeración Industrial SAS**.
Todos los derechos reservados © 2025.

```

¿Quieres que le añada una sección de **contribuyentes**, un **changelog**, o un **roadmap** más detallado?
```
