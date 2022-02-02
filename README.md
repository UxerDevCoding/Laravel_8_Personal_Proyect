<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**
- **[Romega Software](https://romegasoftware.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Installation

1. Create Proyect: composer create-project laravel/laravel project-name 

2. Laravel UI: composer require laravel/ui

3. Bootstrap Auth: php artisan ui bootstrap --auth

4. Package management: npm install && npm run dev

5. Generate personal key: php artisan key:generate

6. Open Serve: php artisan serve

7. Active lines 24 and 25 in "phpunit.xml" file

8. Create DB and update line 14 in ".env" file

## Author

Omar Hevia

## Comandos
- php artisan migrate //migrar a DB
- php artisan make:migration courses //Crear migraciones
- php artisan migrate:rollback //Revertir cambios de la última migración
- php artisan make:migration create_nombre_table //forma correcta de crear la migración
- php artisan migrate:fresh //Incluir una nueva columna en la table y actualizar la DB "OJO ES UN MÉTODO DESTRUCTIVO"
- php artisan make:migration add_nombrecolumna_to_nombretabla_table//Añadir una columna sin borrar las tablas
- php artisan make:model name //Creación del modelo en singular
- php artisan tinker //Trabajar con eloquent. Para salir de tinker ingresar "exit"
    Ejemplo:
     >>> use App\Models\Course;
        >>> $course=new Course;
            => App\Models\Course {#3548}
        >>> $course->name= 'Laravel';
            => "Laravel"
        >>> $course->description= 'Learning Laravel framework';
          => "Learning Laravel framework"
        >>> $course;
            => App\Models\Course {#3548
                name: "Laravel",
                description: "Learning Laravel framework",
            }
        >>> $course->save();
            => true
            >>> $course
            => App\Models\Course {#3548
                name: "Laravel",
                description: "Learning Laravel framework",
                updated_at: "2022-02-01 19:33:42",
                created_at: "2022-02-01 19:33:42",
                id: 1,
            }

php artisan migrate:reset //eliminar todas las tablas
php artisan make:factory CourseFactory --model //Crear Factory a partir del controlador
php artisan make:seeder CourseSeeder //Crear un archivo seeder
php artisan migrate:fresh --seed //Actualizar tabla y añadir seed

Ejemplo: Mirar la DB
>>> use App\Models\Course
>>> $course= Course::all(); //todos los datos
>>> $course=Course::where('category','Front-End')->get(); //Obtener una categoria concreta
>>> $course=Course::where('category','Front-End')->orderBy('id', 'desc')->get(); //Obtener una categoria concreta de forma descendente
>>> $course=Course::where('category','Front-End')->orderBy('name', 'asc')->get(); //Obtener una categoria concreta de forma ascendente
>>> $course=Course::where('category','Front-End')->orderBy('name', 'asc')->first(); //Obtener primer elemento
>>> $course=Course::select('name', 'description')->get(); // para obtener las columnas específicas
>>> $course=Course::select('name', 'description')->orderBy('name', 'asc')->get(); // obtener datos específicos ordenados
>>> $course=Course::select('name', 'description', 'category')->orderBy('name', 'asc')->where('category', 'Front-End')->get(); // obtener datos específicos ordenados en category
>>> $course=Course::select('name as title', 'description', 'category')->orderBy('name', 'asc')->where('category', 'Front-End')->get(); // obtener datos específicos ordenados en category y cambiando el nombre de name
>>> $course=Course::select('name as title', 'description', 'category')->where('category', 'Front-End')->take(5)->get(); // obtener una cantidad concreta datos(5) específicos  y cambiando el nombre de name
>>>$course= Course::where('name', 'Officiis distinctio velit odit aperiam incidunt.')->get(); //Acceder a dato concreto (a una colección que es un array de objetos)
>>>$course= Course::where('name', 'Officiis distinctio velit odit aperiam incidunt.')->first(); //Acceder a dato concreto dentro del array de objetos
>>>$course= Course::find(5); //Acceder al array de objetos con el id
>>>$course->description //Obtener una columna concreta
>>>$course=Course::where('id', '<=', 45)->get(); //Obtener entre un rango de id