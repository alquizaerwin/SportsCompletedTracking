## LaravelAdminUI

## PostgreSQL 11.1

create database database_name character set utf8 collate utf8;

create user database_user identified by 'password';

grant all privileges on database_name.* to database_user;

$ laravel new LaravelAdminUI
$ cd ./LaravelAdminUI

$ nano .env
==================
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=database_name
DB_USERNAME=database_user
DB_PASSWORD=password

$ nano config/database.php
===========================

change:
'default' => env('DB_CONNECTION', 'mysql'),

to look like:
'default' => env('DB_CONNECTION', 'pgsql'),

$ php artisan make:auth
$ php artisan migrate

$ php artisan make:model Teams -m

$ nano app/Teams.php
===========================

class Teams extends Model

{
    //

    protected $fillable = [
        'team_name',
        'team_location',
        'team_sponsor',
        'team_arena',
        'arena_capacity',
        'year_founded',
        'year_joined'
    ];
}



$ php artisan make:migration Teams
$ php artisan make:resource Players
$ php artisan make:resource PlayerCards

add the following to apps/Http/Resources/Players.php

        return parent::toArray($request);
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'position'   => (char) $this->position,
            'team_name'  => $this->team_name,
            ''
        ];

and on app/Http/resources/PlayerCards.php:

class PlayersCards extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            'data' => $this->card,
        ];
    }
}

$ php artisan make:controller PlayerController

$ nano app/Http/Controllers/PlayersController.php
================================================


class PlayersCards extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            'data' => $this->card,
        ];
    }
}



# AngularAdminUX

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 7.3.2.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).

