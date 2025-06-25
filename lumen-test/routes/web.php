<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
$router->get('/hello', 'WelcomeController@hello');

$router->group(['prefix' => 'api'], function () use ($router) {
    // GET endpoint
    $router->get('setoran', 'DataController@getSetoran');
    
    // POST endpoint (create)
    $router->post('data', 'DataController@createData');
    
    // POST endpoint (delete)
    $router->post('data/delete', 'DataController@deleteData');
});