<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function dashboard(){
        return view('store.store_dashboard');
    }
}
