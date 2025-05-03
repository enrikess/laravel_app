
cd laravel_app/
->crear el contenedor de laravel
docker-compose down && docker-compose up -d --build
->actualizar el vendor
docker exec -u laravel laravel-app composer update
->generar llave de la aplicacion
docker exec -it laravel-app bash -c "cp /var/www/.env.example /var/www/.env && php artisan key:generate"
->Ejecutar migraciones de Laravel
docker exec -u laravel laravel-app php artisan migrate


