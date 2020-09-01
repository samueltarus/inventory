<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF;

class IssuingController extends Controller
{
    public function all_issuing_products(){
        $products =DB::table('products')
        ->join('categories','products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->select('products.*', 'categories.category_name', 'suppliers.supplier_name')
        ->get();
        return view('store.all_issuing_products',compact('products'));
    }

    public function issuingreport(){

            // retreive all records from db
            $data = Employee::all();

            // share data to view
            view()->share('employee',$data);
            $pdf = PDF::loadView('pdf_view', $data);

            // download PDF file with download method
            return $pdf->download('pdf_file.pdf');

    }
}
