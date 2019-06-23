<?php
/*** BASIC COMMANDS ***/

//controllers

php artisan make:controller SomeController


//routes
Route::get('some/url', 'SomeController@some_method'); // GET only
Route::post('some/url', 'SomeController@some_method'); // POST only
Route::any('some/url', 'SomeController@some_method'); // POST or GET

//views

$view = view('path/to/view', ['id' => 1]); // with an array of values

$view = view('path/to/view')->with('id', 1); // using the method with
$view = view('path/to/view')->with(['id' => 1]);

$view = view('path/to/view', compact('id', 'name')); //using compact

//migrations
php artisan make:migration good_name_for_the_migration //To create a new blank migration
php artisan make:migration create_users_table --create=users //To create a migration that is pre-generated to create a new table "users"
php artisan make:migration add_votes_to_users_table --table=users //To create a migration that would make changes to the table "users"

php artisan migrate //To run all the migrations that you did not yet run
php artisan migrate:rollback //To rollback the latest batch of migrations use
php artisan migrate:reset //To reset all migrations
php artisan migrate:refresh //To reset and then run all of them again

//models
php artisan make:model ModelName
php artisan make:model ModelName -m  //will automatically prepare migration as well