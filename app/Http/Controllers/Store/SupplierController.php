<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;

class SupplierController extends Controller
{

    public function all_suppliers(){


        $suppliers =DB::table('suppliers')
        ->orderBy('supplier_id', 'DESC')
        ->get();
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


    public function edit_supplier($supplier_id){


        $suppliers=Supplier::find($supplier_id);

        return view('store.edit_supplier',compact('suppliers'));
    }

    public function update_product(Request $request,$supplier_id){
        $data =array();


        $data['supplier_name']=$request->supplier_name;
        $data['supplier_mobile']=$request->supplier_mobile;
        $data['supplier_address']=$request->supplier_address;
        $data['supplier_details']=$request->supplier_details;
        $data['previous_balance']=$request->previous_balance;

            DB::table('suppliers')
            ->where('supplier_id',$supplier_id)
            ->update($data);

        return Redirect::to('all-suppliers');

    }

    public function delete_product( Request $request, $supplier_id){

        $supplier=Supplier::findOrFail($supplier_id);
        $supplier->delete();
        return Redirect::to('all-suppliers');
    }

    public function generate_suppliers_report(){

    }


    public function suppliers_report (){

        $suppliers = Supplier::all();
        view()->share('store.all_suppliers_report',$suppliers);
        $pdf = PDF::loadView('store.all_suppliers_report', compact('suppliers'));

            return $pdf->download('suppliers.pdf');
    }

}
