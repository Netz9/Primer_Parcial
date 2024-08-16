<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




Consejos:
https://github.com/Netz9/Primer_Parcial.git -clonar el repositorio


Ejecutar el composer insatall:
composer install


Configurar el archivo de entorno:
cp .env.example .env

Crear una base de datos llamada como la que se encuentra en el .env

Ejecutar las migraciones:
php artisan migrate

correrlo:
php artisan serve


Curls para empleados:
Create:
curl --location 'http://127.0.0.1:8000/api/employees' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer your-auth-token' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D' \
--data-raw '{
        "first_name": "Jorge",
        "last_name": "min",
        "email": "min.jor@example.com",
        "hire_date": "2024-08-16",
        "position": "senior",
        "salary": 75000
    }'


Edit:
curl --location --request PUT 'http://127.0.0.1:8000/api/employees/1' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer your-auth-token' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D' \
--data-raw '{
        "first_name": "Juan",
        "last_name": "Martinez",
        "email": "juan.mar@example.com",
        "hire_date": "2024-08-16",
        "position": "Junior",
        "salary": 1000
    }'



Get:
curl --location 'http://127.0.0.1:8000/api/employees' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D'



Delete:
curl --location --request DELETE 'http://127.0.0.1:8000/api/employees/2' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D'


Curl para proyectos:
Create:
curl --location 'http://127.0.0.1:8000/api/projects' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer your-auth-token' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D' \
--data '{
        "name": "Proyecto 2",
        "description": "Nuevo proyecto 2 creado",
        "start_date": "2024-08-16",
        "end_date": "2024-12-31",
        "completion_percentage": 30
    }'



Edit:
curl --location --request PUT 'http://127.0.0.1:8000/api/projects/1' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer your-auth-token' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D' \
--data '{
        "name": "Proyecto 1 actualizado",
        "description": "se acutalizo el proyecto",
        "start_date": "2024-08-16",
        "end_date": "2024-12-31",
        "completion_percentage": 90
    }'


Get:
curl --location 'http://127.0.0.1:8000/api/projects' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D'


Asignacion de empleados a proyectos:
curl --location 'http://127.0.0.1:8000/api/projects/assign' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer your-auth-token' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6Im5ZUVBNb1dSYW9PWEowaXBrQUpmTFE9PSIsInZhbHVlIjoiaUhzNjhaSm4vbkxvcUY3V042dXV5aDVYY2luOE5nQWk1YmllQ2k0T1Q2U2Q1dkhtRjFVbXZ3RTh5ajBjS21MYWMrMHEzekZaWStkWHJCUEUzUEMwRE9EZmxqOWU2aHZ2T2Z2Ky9iT0l6QXdZRWVrSmVQRTNqMElOR24rZ0dXTFAiLCJtYWMiOiIxZDljODc4YTFmOTdmYTFkNjMxZGZiODA0OGNlYjQ4NGZlYWMzNTdlMzBiMGZhMzNiNWE4MDczYjJhNjRlYzI1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImlTVlN3V1RNb0NSekdmdVZXZ2NBQlE9PSIsInZhbHVlIjoibi8wQUdWd2VmNEhlcEdINGVSL3NyWGpkT3FlYjdKWGpabzBhMkt0dHF3MWQyNDZzWVZvWG4wcisyb0FKQ0dZYUgyV0c1NkR5bEZwbWhyUXdGbEdTTndmeU9SLzd4Q2JYY1BlcUlZYlR1Y1hsRDlkUk41QzRSYlgrbkRGVkw0N3giLCJtYWMiOiI4ZTgxOTU3ODYzMjEwMWZjNjk0NDEwYWM2MWRiYjkwNmRhODgwZGQ3ODAwM2M1OTI4NTdlNjJiMzk0ZWM2YmE3IiwidGFnIjoiIn0%3D' \
--data '{
        "employee_id": 5,
        "project_id": 2,
        "assigned_date": "2024-08-16"
    }'