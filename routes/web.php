<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route GET qui utilise la méthode hello() du controlleur TwinController, son nom est sayHello
Route::get('/hello/{name?}', 'TwinController@hello')->name('sayHello');

// Groupe des routes ayant le préfix articles
Route::group(['prefix' => 'articles'], function($router){
    $router->get('/', ['as' => 'articles.index', 'uses' => 'TwinController@index']);

    // Route ayant le paramètre id qui doit être numérique
    $router->get('/{id}', ['as' => 'articles.show', 'uses' => 'TwinController@show'])->where('id', '[0-9]+');
});



