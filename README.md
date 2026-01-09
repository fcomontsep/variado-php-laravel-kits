# Sistema Laravel + Kits
Repositorio experimental para probar una instalación de PHP Laravel 12 con Kits (Tailwind Flowbite, Livewire, Flux).<br>Este repositorio se encuentra en desarrollo y no está desplegado.

<hr>
<img src="https://i.imgur.com/XftJntg.jpg">
<hr>

# Requerimientos
- PHP (Utilizado y recomendado: 8.2+)
- Composer
- Node.js (Utilizado: 22.20.0, recomendado: 18.x o superior)
- Servidor Apache con configuración personalizada

<hr>

# Recomendado
- VSCode con extensión Tailwind CSS IntelliSense para autocompletado y sugerencias.
- Extensiones asociadas a Laravel, tales como Blade Formatter, Snippets, Goto View, etc.

<hr>

# Dependencias
- Laravel (instalado vía ``laravel new``)
- Tailwind CSS (compilado con CLI)
- Flowbite (JS + componentes)
- Livewire (en instalación)

<hr>

# Instalación desde Repositorio
### 1. Clona el repositorio
Utiliza tu gestor git de preferencia (ej: GitHub Desktop) o clona desde la terminal.
```bash
git clone https://github.com/tu-usuario/variado-php-laravel-kits.git
cd variado-php-laravel-kits
```

### 2. Instala las dependencias y configura el entorno
```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

### 3. Configuración local de prueba (Apache + hosts)
Agrega esta línea al archivo<br><b>C:\Windows\System32\drivers\etc\hosts</b>
```bash
127.0.0.1 laravel-kits.test
```
Requerirás un VirtualHost en Apache (por ejemplo, si lo estás utilizando vía XAMPP). <br>Puedes utilizar la siguiente configuración:
```bash
<VirtualHost *:80>
    ServerName laravel-kits.test
    DocumentRoot "C:/Ruta/Al/Repositorio/Public"

    <Directory "C:/Ruta/Al/Repositorio/Public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

# Instalación desde Cero
Si deseas instalar desde cero Laravel 12 con Tailwind/Flowbite v4 y Livewire realiza los siguientes pasos.
### 1. Crea un nuevo proyecto Laravel
```bash
composer global require laravel/installer
laravel new nombre-proyecto
```
Selecciona de opciones:
- Livewire Volt
- Laravel
- Sin NPM install o build.

### 2. Actualiza manualmente la instalación de Tailwind y Flowbite
```bash
npm remove tailwindcss
npm install tailwindcss @tailwindcss/vite --save-dev
```
Posteriormente, elimina los archivos tailwind.config.js y postcss.config.js

### 3. Utiliza los imports apropiados en los siguientes archivos
<b>a) vite.config.js</b>

```js
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```
<b>b) resources/css/app.css</b>

```css
@import "tailwindcss";
@custom-variant dark (&:where(.dark, .dark *));

@import "flowbite/src/themes/default";
@plugin "flowbite/plugin";
@source "../../node_modules/flowbite";
```
<b>c) resources/js/app.js</b>

```js
import 'flowbite';
```
<b>d) remover el control automático de darkMode por parte de Flux</b><br>
En los archivos que sean necesarios (ej: head.blade.php)

```js
@fluxAppearance <-- eliminar
```

### 4. Instala flowbite actualizado y compila estilos.

```bash
npm install flowbite --save
npm run build
npm run dev
```

# Observaciones y comentarios
- Laravel no inicializa Git automáticamente. Si creas el proyecto desde cero (ej: con ``laravel new nombre-proyecto`` mediante Git Bash), ejecuta git init en la raíz del proyecto.
