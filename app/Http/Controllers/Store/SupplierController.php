<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{

    public function all_suppliers(){

        $suppliers =DB::table('suppliers')->get();
        return view('store.all_suppliers',compact('suppliers'));
    }



    public function add_supplier(){

        return view('store.add_supplier');
    }
    public  function save_supplier(Request $request){

        $data =array();

        $data['supplier_name']=$request->supplier_name;
        $data['supplier_mobile']=$request->supplier_mobile;
        $data['supplier_address']=$request->supplier_address;
        $data['supplier_details']=$request->supplier_details;
        $data['previous_balance']=$request->previous_balance;


        DB::table('suppliers')->insert($data);

        return Redirect::to('all-suppliers');

    }
}
