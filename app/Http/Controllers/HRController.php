<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function dashboard(){
        return view('HRM.hrm_dashboard');
    }
}
