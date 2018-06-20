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


// login to get JWT token - no middleweare
$app->post('auth/login', ['uses' => 'AuthController@authenticate']);


$app->group(['middleware' => 'jwt.auth'], function() use ($app) {

    $app->get('users', ['uses' => 'UserController@getAlUsers']);

});