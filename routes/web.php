<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\LoansController;

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('loans', ['as' => 'create', 'uses' => 'LoansController@create']);
    $router->get('loans', ['as' => 'list', 'uses' => 'LoansController@list']);
    $router->get('loans/{id}', ['as' => 'info', 'uses' => 'LoansController@info']);
    $router->put('loans/{id}', ['as' => 'edit', 'uses' => 'LoansController@edit']);
    $router->delete('loans/{id}', ['as' => 'delete', 'uses' => 'LoansController@delete']);
});
