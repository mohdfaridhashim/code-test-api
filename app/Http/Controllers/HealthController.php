<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
/**
 * User resource representation.
 *
 * @Resource("Health", uri="/health")
 */
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

    /**
     * GET app health check
     *
     * Get a JSON representation of app health
     *
     * @Get("/check")
     * @Versions({"v1"})
     * @Request()
     * @Response(200, body={"title": "code-test", "api-version": "v1", "lumen-version": "Lumen (5.6.4) (Laravel Components 5.6.*)"})
     */
    public function GET_check()
    {
        $response = [
          'title' => env('API_NAME'),
          'api-version' => env('API_VERSION'),
          'lumen-version' => app()->version()
        ];
        return response()->json($response);
    }

    /**
     * GET app maintenance
     *
     * Get a JSON representation of app maintenance mode
     *
     * @Get("/maintenance")
     * @Versions({"v1"})
     * @Request()
     * @Response(200, body={ "error_message": "the backend on maintenance mode" })
     */
    public function GET_maintenance()
    {
        $response = [
          'error_message' => env('API_MSG'),
        ];
        return response()->json($response)->setStatusCode(env('API_OFFLINE_CODE'));
    }

    //
}
