<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
class HealthController extends Controller
{
    use Helpers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function GET_check()
    {
        $response = [
          'title' => env('API_NAME'),
          'api-version' => env('API_VERSION'),
          'lumen-version' => app()->version()
        ];
        return response()->json($response);
    }

    public function GET_maintenance()
    {
        $response = [
          'error_message' => env('API_MSG'),
        ];
        return response()->json($response)->setStatusCode(env('API_OFFLINE_CODE'));
    }

    //
}
