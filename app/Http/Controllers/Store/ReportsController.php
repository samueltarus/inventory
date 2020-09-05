<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Redirect;

// use Barryvdh\DomPDF\PDF;

class ReportsController extends Controller
{
    public function all_reports(){

        $products =DB::table('products')
        ->join('categories','products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->select('products.*', 'categories.category_name', 'suppliers.supplier_name')
        ->get();

        return view('store.all_reports',compact('products'));

    }

    public function product_reports(){

         $products = Product::all();
          view()->share('store.all_products_reports',$products);
        $pdf = PDF::loadView('store.all_products_reports', compact('products'));

        return $pdf->download('products.pdf');

}

public function weekly_reports(){


         $products = Product::all();
         view()->share('store.weekly_report',$products);
         $pdf = PDF::loadView('store.weekly_report', compact('products'));

            return $pdf->download('products.pdf');




}



}
