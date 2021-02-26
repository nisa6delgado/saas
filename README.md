# SAAS

## Instalación

- Crear la base de datos con el nombre 'saas'.
- Ejecutar los siguientes comandos en consola:

~~~
git clone https://github.com/nisa6delgado/saas.git
cd saas
composer install
php artisan migrate
php artisan serve
~~~


## Rutas disponibles
~~~
GET     /api/students
POST    /api/students/store
PUT     /api/students/update/{id_student}
DELETE  /api/students/delete/{id_student}

GET     /api/ratings
POST    /api/ratings/store
PUT     /api/ratings/update/{id_rating}
DELETE  /api/ratings/delete/{id_rating}

GET     /api/ratings/{id_student}
~~~