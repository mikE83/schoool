# schoool
Api REST in laravel

1. **Lenguaje de programacion** PHP7
2. **FRAMEWORK** LARAVEL 5.5
3. **Security** Passport Oauth

* DEFAULT DATABASE ARE POSTGRES YOU CAN CHANGE using  **.env** and **app\database.php**

To install folow the instructions:

1.	composer install
2.	Php artisan migrate(*)
3.	Php db:seed (*)
4.	php artisan serve –host= TUIP

**to load database structure and data you need to run the next comand 

#**Para revisar las funcionalidades favor de descargar el manual en el siguiente link**
**Importante**
[MANUAL DE USO](https://github.com/mikE83/schoool/blob/master/FichaPruebaPagoFacil%20(1).pdf
)

**Modelos**
/var/www/html/school/app
Student Modelo que se encarga de integrarse con con la tabla t_alumnos 
Courses Modelo que se encarga con integrarse con la tabla t_materias
Califcations Modelo que se encarga con integrarse con la tabla t_calificaciones


**Controladores**
school/app/Http/Controllers
StudentController.php Controlador que se encarga de realizar y resolver las peticiones de la prueba
