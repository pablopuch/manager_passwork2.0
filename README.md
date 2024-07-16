<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Manager Password

Manager Password es un gestor de contraseñas construido con Laravel 11, Livewire y Tailwind CSS. Este proyecto permite a los usuarios gestionar sus contraseñas de forma segura y sencilla. Incluye autenticación mediante Laravel Breeze y Socialite para el inicio de sesión con GitHub.

## Tabla de Contenidos

- [Instalación](#instalación)
- [Uso](#uso)
- [Características](#características)
- [Contribución](#contribución)
- [Licencia](#licencia)
- [Autor](#autor)

## Instalación

Sigue estos pasos para clonar el repositorio e instalar las dependencias necesarias:

### Prerrequisitos

- PHP >= 8.1
- Composer
- Node.js y npm
- MySQL o cualquier otra base de datos compatible

### Comandos de Instalación

```bash
# Clonar el repositorio
git clone https://github.com/tu-usuario/manager-password.git
cd manager-password

# Instalar dependencias de PHP
composer install

# Instalar dependencias de JavaScript
npm install

# Configurar el archivo de entorno
cp .env.example .env

# Generar la clave de la aplicación
php artisan key:generate

# Migrar la base de datos
php artisan migrate

# Compilar los assets
npm run dev

# Iniciar el servidor de desarrollo
php artisan serve
```

## Características
- Gestión de Contraseñas: Crea, edita y elimina contraseñas de forma segura.
- Autenticación: Registro y login de usuarios utilizando Laravel Breeze.
- Login Social: Inicio de sesión mediante GitHub utilizando Laravel Socialite.
- Interfaz Reactiva: Utiliza Livewire para crear componentes reativos sin recargar la página.
- Diseño Moderno: Estilizado con Tailwind CSS para una experiencia de usuario atractiva y moderna.

## Contribución
Si deseas contribuir al proyecto, sigue estos pasos:

Haz un fork del proyecto.
Crea una rama con una nueva característica ```git checkout -b feature/nueva-caracteristica```
Realiza los commits necesarios ```git commit -m 'Agrega nueva característica'```.
Haz push a la rama ```git push origin feature/nueva-caracteristica```.
Abre un Pull Request.

## Contacto

Si tienes alguna pregunta o quieres discutir algún reto en particular, puedes contactarme a través de [pablopuch21@hotmail.com](mailto:pablopuch21@hotmail.com).

## Licencia

Este proyecto está bajo la Licencia MIT. Puedes ver más detalles en el archivo [LICENSE](./LICENSE).
