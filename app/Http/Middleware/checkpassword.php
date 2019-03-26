<?php

namespace App\Http\Middleware;

use Closure;

class checkpassword
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
        if ($request->password = $request->retypePassword) {
            return ('jeanser.adminLogin');
        }
        return $next($request);
    }
}
