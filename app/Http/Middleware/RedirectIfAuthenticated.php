<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id==1) {

            return view('admin.dashboard');

        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id==2) {

            return view('sales.dashboard');


        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==3) {

            return view('store.store_dashboard');


        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==4) {

            return view('finance.finance_dashboard');


        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==5) {

            return view('HRM.hrm_dashboard');


        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==6) {

            return view('customer.dashboard');


        }

        else {
            return $next($request);
        }

    }
}
