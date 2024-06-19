<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Verdieping software

## Benodigheden
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [NodeJS](https://nodejs.org/en)

## Setup
-   Kloon de repository: https://github.com/luukbattjes25/verdieping-software.git
-   Kopieer het .env bestand met het commando "cp .env.example .env"
    - DB_CONNECTION: het type database (mysql, pgsql, sqlite, sqlsrv)
    - DB_HOST: de hostnaam van je database, gewoonlijk 127.0.0.1
    - DB_PORT: de poort waarop je database draait, standaard is dit 3306 voor MySQL
    - DB_DATABASE: de naam van je database
    - DB_USERNAME: je databasegebruikersnaam
    - DB_PASSWORD: je database wachtwoord

-   Voer het commando "php artisan migrate" uit om de database aan te maken.
-   Start een development server met het commando "php artisan serve".
-   Open de server op "localhost:8000".

