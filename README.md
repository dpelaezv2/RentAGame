# RentAGame
Página web para vender y alquilar videojuegos

Para correr el código se debe tener instalado xampp y corriendo Apache y MySQL.

en phpMyAdmin cree una nueva base de datos.

Descomprima el archivo .zip

En la línea de comandos, dentro de la carpeta RentAGAmePage, correr el comando

 	'composer install'

Dentro de la carpeta RentAGamePage busque el archivo .env (si no existe créelo).
Modifique la siguiente sección deacuerdo a sus datos (DB_PORT, DB_DATABASE,DB_USERNAME,
DB_PASSWORD):

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3310
DB_DATABASE=taller01
DB_USERNAME=root
DB_PASSWORD:

En la línea de comandos, dentro de la carpeta RentAGAmePage, correr el comando

 	'php artisan key:generate'

luego el comando

	'php artisan migrate'

y ya finalmente correr

	'php artisan serve'

y entrar al Link 	http://127.0.0.1:8000
