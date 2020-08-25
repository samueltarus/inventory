<?php

namespace App\Http\Controllers;

use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function dashboard(){


        $products = Product::all();

        $suppliers = Supplier::all();




        return view('store.store_dashboard',compact('products','suppliers'));
    }



}
