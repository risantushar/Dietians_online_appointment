<?php

namespace App\Http\Middleware;
use Session;

use Closure;

class doctorMiddleware
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
        if(Session::get('doctor_name')){
            return $next($request);
        }
        else
        {
            return redirect('/doctor/login');
        }
    }
}
