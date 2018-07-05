<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function GET_index()
    {
        $response = [
          'title' => env('API_NAME'),
          'api-version' => env('API_VERSION'),
          'lumen-version' => app()->version(),
          'created' => '2017-08-29 12:01',
          'updated' => '2017-09-12 12:36',
        ];
        return response()->json($response);
    }

    //
}
