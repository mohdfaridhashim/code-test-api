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
    $response = [
      'title' => env('API_NAME'),
      'api-version' => env('API_VERSION'),
      'lumen-version' => app()->version(),
      'author' => env('API_AUTHOR'),
      'created' => '2017-08-29 12:01',
      'updated' => '2017-09-12 12:36',
    ];
    return response()->json($response);
});
