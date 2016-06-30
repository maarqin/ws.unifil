<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/unifil.ws/all', 'ContatosController@all');
$app->post('/unifil.ws/store', 'ContatosController@store');
$app->post('/unifil.ws/edit', 'ContatosController@edit');
$app->post('/unifil.ws/show', 'ContatosController@show');
$app->post('/unifil.ws/delete', 'ContatosController@destroy');

