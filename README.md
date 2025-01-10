Proyecto Prueba
Descripción
Este proyecto es una aplicación diseñada para gestionar gastos

Requisitos
Antes de comenzar, asegúrate de tener los siguientes requisitos instalados en tu sistema:

    Laravel > 8.0
    Composer
    Node.js y npm
    SQLite


Instalación
Sigue estos pasos para instalar y configurar el proyecto en tu entorno local:

    Clona el repositorio en tu máquina local:

     git clone https://github.com/Santiagopt97/prueba_laravel
     


    Navega al directorio del proyecto:

     cd prueba
     


    Instala las dependencias de PHP utilizando Composer:

     composer install
     


    Instala las dependencias de Node.js utilizando npm:

     npm install
     


    Configura las variables de entorno:
        Crea un archivo .env en la raíz del proyecto y añade las siguientes variables:

           DB_CONNECTION=sqlite
           


    Ejecuta las migraciones de la base de datos:

     php artisan migrate
     


    Ejecuta los seeders para poblar la base de datos con datos iniciales:

     php artisan db:seed
     


Uso
Para ejecutar la aplicación, utiliza el siguiente comando:

composer run dev



La aplicación debería estar disponible en http://localhost:8000/.