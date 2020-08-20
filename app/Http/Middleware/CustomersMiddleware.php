<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Guard;

class CustomersMiddleware
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
        if (Auth::check() && Auth::user()->role_id == '6') {
            return $next($request);
        }
         elseif (Auth::check() && Auth::user()->role_id == '1') {

            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role_id == '2') {

            return redirect('/sales');
        }
        elseif (Auth::check() && Auth::user()->role_id == '3') {

            return redirect('/store');
        }
        elseif (Auth::check() && Auth::user()->role_id == '4') {

            return redirect('/finance');
        }
        elseif (Auth::check() && Auth::user()->role_id == '5') {

            return redirect('/HRM');
        }
        else {
            return redirect('/home');
        }
    }

}
