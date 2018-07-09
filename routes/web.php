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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api)
{
	$api->get('/', ['uses' => 'App\Http\Controllers\HomeController@GET_index']);

	$api->group(['prefix' => 'health'], function ($api) {
        $api->get('/check', ['as' => 'health_check', 'uses' => 'App\Http\Controllers\HomeController@GET_check']);
        $api->get('/maintenance', ['as' => 'maintenance', 'uses' => 'App\Http\Controllers\HomeController@GET_maintenance']);
    });
});
