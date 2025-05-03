# Aplicación Laravel con Docker

Este es un proyecto Laravel configurado para ejecutarse en contenedores Docker.

## Requisitos previos

- Docker y Docker Compose instalados en su sistema
- Git (opcional para clonar el repositorio)

## Configuración inicial

1. Navegar al directorio del proyecto:

```bash
cd laravel_app/
```

2. Crear y levantar los contenedores Docker:

```bash
docker-compose down && docker-compose up -d --build
```

3. Actualizar las dependencias de Composer:

```bash
docker exec -u laravel laravel-app composer update
```

4. Configurar el archivo de entorno y generar la clave de la aplicación:

```bash
docker exec -it laravel-app bash -c "cp /var/www/.env.example /var/www/.env && php artisan key:generate"
```

5. Ejecutar las migraciones de la base de datos:

```bash
docker exec -u laravel laravel-app php artisan migrate
```

## Acceso a la aplicación

Una vez completados los pasos anteriores, la aplicación estará disponible en:
- http://localhost:8000

## Comandos útiles

- Para acceder a la terminal del contenedor:
```bash
docker exec -it laravel-app bash
```

- Para ejecutar comandos de Artisan:
```bash
docker exec -u laravel laravel-app php artisan [comando]
```

- Para detener los contenedores:
```bash
docker-compose down
```


