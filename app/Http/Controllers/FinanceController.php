<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function dashboard(){
        return view('finance.finance_dashboard');
    }
}
