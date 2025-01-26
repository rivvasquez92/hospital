Proyecto CRUD para Gestión de Doctores y Pacientes

Este proyecto es una aplicación desarrollada en Laravel que permite la gestión de doctores y pacientes en un sistema hospitalario. Ofrece funcionalidades completas de CRUD (Crear, Leer, Actualizar y Eliminar) para ambas entidades.

Características

Pacientes: Administración de datos como nombre, apellido, teléfono, email y fecha de nacimiento.

Doctores: Administración de datos como nombre, especialidad, teléfono y email.

Autenticación: Sistema de autenticación y autorización para acceder al sistema.

Interfaces Modernas: Uso de Bootstrap para una experiencia de usuario más amigable.

Requisitos del Sistema

PHP >= 8.1

Composer

MySQL

Node.js y NPM (para Vite)

Laravel >= 10

Instalación

Clona el repositorio:

git clone <url-del-repositorio>
cd <nombre-del-repositorio>

Instala las dependencias de PHP:

composer install

Instala las dependencias de Node.js:

npm install

Crea el archivo de configuración:

cp .env.example .env

Configura las credenciales de la base de datos en el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña

Genera la clave de aplicación:

php artisan key:generate

Ejecuta las migraciones y seeders:

php artisan migrate --seed

Compila los assets:

npm run dev

Inicia el servidor:

php artisan serve

Uso

Accede a la aplicación desde el navegador:

http://localhost:8000

Inicia sesión con el usuario administrador generado por el seeder:

Email: admin@admin.com

Contraseña: admin

Navega a las secciones de pacientes o doctores para realizar las operaciones CRUD.
