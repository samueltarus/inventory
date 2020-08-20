<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Guard;

class  AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_id == '1') {
            return $next($request);
        }
         elseif (Auth::check() && Auth::user()->role_id == '2') {

            return redirect('/sales');
        }
        else {
            return redirect('/home');
        }
    }
}
