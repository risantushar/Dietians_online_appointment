<?php

namespace App\Http\Middleware;
use Session;

use Closure;

class CustomerMiddleware
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
        if(Session::get('customer_name')){
            return $next($request);
        }
        else
        {
            return redirect('/customer/login');
        }
    }
}
