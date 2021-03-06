<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->role_id == '1') {
            return('/admin');
        }
        elseif (Auth::check() && Auth::user()->role_id == '2') {
            return('/sales');
        }
        elseif (Auth::check() && Auth::user()->role_id == '3') {
            return('/store');
        }
        elseif (Auth::check() && Auth::user()->role_id == '4') {
            return('/finance');
        }
        elseif (Auth::check() && Auth::user()->role_id == '5') {
            return('/HRM');
        }
        elseif (Auth::check() && Auth::user()->role_id == '6') {
            return('/customer');
        }
        else {
            return('/login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
