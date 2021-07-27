# Comando usados en el proyecto 

## Ejecutar migraciones 
php artisan make:model Post -cmf

## Instalar paquetes
### slugger
` composer require cviebrock/eloquent-sluggable="^7.0"`

### Auth
`composer require laravel/ui:^2.4`
`php artisan ui vue --auth`
`npm install && npm run dev`

##  php artisan migrate --seed

## Instalar paquete de idioma Spanish
`composer require laraveles/spanish`
`php artisan vendor:publish --tag=lang`
Esto lo podemos hacer modificando el parámetro locale de la configuración de Laravel en config/app.php:

// Ej: español
'locale'          => 'es',
// Ej: inglés
'locale'          => 'en',

## Cambiar Zona horaria
`https://www.php.net/manual/es/timezones.america.php`