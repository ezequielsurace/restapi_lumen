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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return str_random(32);
});


$router->get('/aula',  ['uses' => 'AulaController@showAllAulas']);

$router->get('/aula/{id}', ['uses' => 'AulaController@showOneAula']);

$router->post('/aula', ['uses' => 'AulaController@create']);

$router->delete('/aula/{id}', ['uses' => 'AulaController@delete']);

$router->put('/aula/{id}', ['uses' => 'AulaController@update']);

$router->get('/persona',  ['uses' => 'PersonaController@showAllPersonas']);

$router->get('/persona/{id}', ['uses' => 'PersonaController@showOnePersona']);

$router->post('/persona', ['uses' => 'PersonaController@create']);

$router->delete('/persona/{id}', ['uses' => 'PersonaController@delete']);

$router->put('/persona/{id}', ['uses' => 'PersonaController@update']);

$router->get('/persona/{id}/alumnocalefaccion', ['uses' => 'PersonaController@checkIfAlumnoTieneCalefaccion']);

$router->get('/clase',  ['uses' => 'ClaseController@showAllClases']);

$router->get('/clase/{id}', ['uses' => 'ClaseController@showOneClase']);

$router->post('/clase', ['uses' => 'ClaseController@create']);

$router->delete('/clase/{id}', ['uses' => 'ClaseController@delete']);

$router->put('/clase/{id}', ['uses' => 'ClaseController@update']);