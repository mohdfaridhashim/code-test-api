<?php

namespace App\Http\Controllers;

/**
 * Default URL
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

    /**
     * GET default API response
     *
     * Get a JSON representation of default URL
     *
     * @Get("/")
     * @Versions({"v1"})
     * @Request()
     * @Response(200, body={ "status": "SUCESS", "title": "code-test", "api-version": "v1", "lumen-version": "Lumen (5.6.4) (Laravel Components 5.6.*)" })
     */
    public function GET_index()
    {
        $response = [
          'status' => 'SUCCESS',
          'title' => env('API_NAME'),
          'api-version' => env('API_VERSION'),
          'lumen-version' => app()->version()
        ];
        return response()->json($response);
    }

    //
}
