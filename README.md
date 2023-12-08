# Bussines and Reviews

Livewire is used [Official Documentation](https://laravel-livewire.com/docs/2.x/quickstart), [Repository](https://github.com/livewire/livewire)

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x)

Install all the dependencies using composer

    composer install   


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a link storage

    php artisan storage:link

Run the database migrations & seeder (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve


**TL;DR command list**
    
    composer install    
    cp .env.example .env
    php artisan key:generate
    php artisan storage:link
    php artisan migrate:fresh --seed
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan serve

----------

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the controllers
- `app/Http/Livewire` - Contains all function of components livewire
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in web.php file
- `resources/view/livewire` - Contains all view components livewire
- `tests` - Contains all functionals test

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing

Run the laravel test

    php artisan test

Run the laravel development server

    php artisan serve
