<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Verdieping software

Voor mijn keuzedeel verdieping software heb ik een todo website gemaakt.
De website spreekt voor zich.

## functionaliteiten
- Todo aanmaken
- Todo bewerken
- Todo verwijderen
- Todos bekijken.

## Benodigheden
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [NodeJS](https://nodejs.org/en)

## Setup
1. Clone de repository met: 
```bash
git clone https://github.com/luukbattjes25/verdieping-software.git
```
2. Kopieer het .env bestand met het commando: 
```bash
cp .env.example .env
```
3. Pas de volgende database gegevens correct aan:
    - DB_CONNECTION: het type database (mysql, pgsql, sqlite, sqlsrv)
    - DB_HOST: de hostnaam van je database, gewoonlijk 127.0.0.1
    - DB_PORT: de poort waarop je database draait, standaard is dit 3306 voor MySQL
    -  DB_DATABASE: de naam van je database
    - DB_USERNAME: je databasegebruikersnaam
    - DB_PASSWORD: je database wachtwoord   
4. Voer het volgende commando uit om de database aan te maken.
```bash
php artisan migrate
```
5. Start een development server met het volgende commando.
```bash
php artisan serve
```
6. Open de server op "localhost:8000".

