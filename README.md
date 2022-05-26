# reto-back-end
Laravel Back End
laravel 9
php 8.1.6

- Descarga la última version de Laravel
- Crea migraciones, seeders y modelos, para 2 tablas(CLIENTE Y PAQUETE).
- Cada una con 5 columnas (sin contar el ID, y los 2 timestamps).
- Crea 3 endpoints de API para cada tabla:
    - El 1ero para toda la colección (todos los datos); eje: api/cliente.
    - El 2do para el recurso (un registro en especifico, via su ID); eje: api/cliente/1.
    - El 3ro debe mostrar el listado de paquetes que tiene un cliente; eje: api/paquetes/cliente/1

Urls de ejemplo para consulta de la API Rest

1.- http://127.0.0.1:8000/api/clientes
2.- http://127.0.0.1:8000/api/pacientes
3.- http://127.0.0.1:8000/api/paquetes/cliente/3