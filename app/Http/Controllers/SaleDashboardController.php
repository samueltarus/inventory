<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleDashboardController extends Controller
{
    public function dashboard(){
        return view('sales.dashboard');
    }
}
