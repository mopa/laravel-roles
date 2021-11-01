# Demo de una App para gestión de roles

[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)
[![Laravel version](https://img.shields.io/badge/laravel-v7.30-blue)](https://img.shields.io/badge/laravel-v7.30-blue)


En la siguiente App creada bajo Laravel 7.30, se pone a prueba la funcionalidad de una gestión de roles, los cuales tendrán acceso a los diferentes departamentos elegidos.

Para una mejor prueba de la misma, se incluyen el `Dockerfile`, `docker-compose.yml`, `000-default.conf` para levantar todos los servicios necesarios. Nótese que además están disponibles los `.env`, por lo que una vez arrancados todos los servicios sólo será necesario importar la copia de la base de datos (`laravel.sql`) desde `phpmyadmin`.

Los pasos a seguir para levantar la app son:
1. Descargar o clonar el repositorio
2. Ejecutar `docker-compose up`. Este proceso tardará unos minutos, puesto que debe de construir la imagen del `Dockerfile`.
3. Nos dirigimos a `localhost:9000` (para entrar a `phpmyadmin`) e ingresamos con `laravel_user` y `userlaravel` como contrasseña.
4. En la base de datos `laravel`, importamos el fichero `laravel.sql`.

Se ha incluido una URL adicional de pruebas para ver un listado de todos los usuarios registrados (`localhost/usuarios`).