<?php

namespace App\Http\Controllers;

/**
 * User resource representation.
 *
 * @Resource("Home", uri="/")
 */
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
          'lumen-version' => app()->version()
        ];
        return response()->json($response);
    }

    //
}
