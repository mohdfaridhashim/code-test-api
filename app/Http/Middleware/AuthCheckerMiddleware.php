<?php

namespace App\Http\Middleware;

use Closure;

class AuthCheckerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //code check with Oauth
        if (env('API_OFFLINE')) {
            return redirect('maintenance');
        }
        return $next($request);
    }
}
