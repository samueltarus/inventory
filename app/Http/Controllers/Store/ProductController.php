<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF;

use App\Product;

use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    public function all_products(){
        $products =DB::table('products')
        ->join('categories','products.category_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        ->select('products.*', 'categories.category_name', 'suppliers.supplier_name')
        ->get();

        return view('store.all_product',compact('products'));
    }


    public function add_product(){

        $categories =DB::table('categories')->get();
        $suppliers =DB::table('suppliers')->get();
        return view('store.add_product',compact('categories','suppliers'));
    }



    public  function save_product(Request $request){

        $data =array();

        $data['product_barcode_qr_code']=$request->product_barcode_qr_code;
        $data['product_name']=$request->product_name;
        $data['product_details']=$request->product_details;
        $data['category_id']=$request->category_id;
        $data['product_per_cartoon']=$request->product_per_cartoon;
        $data['sell_price']=$request->sell_price;
        $data['supplier_price']=$request->supplier_price;
        $data['model']=$request->model;
        $data['supplier_id']=$request->supplier_id;
        // $data['supplier_price']=$request->supplier_price;
        $image=$request->file('image');

    if ($image) {

        $image_name = Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='Product_images/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if ($success) {

            $data['image'] = $image_url;

            DB::table('products')->insert($data);
            return Redirect::to('all-products');

            }
            }

        DB::table('products')->insert($data);

        return Redirect::to('all-products');

    }

    public function edit_product($product_id){


        $products=Product::find($product_id);
        // $products =DB::table('products')
        // ->join('categories','products.category_id', '=', 'categories.category_id')
        // ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        // ->select('products.*', 'categories.category_name', 'suppliers.supplier_name')
        // ->get();

        return view('store.edit_product',compact('products'));
    }

    public function update_product(Request $request,$product_id){
        $data =array();

        $data['product_barcode_qr_code']=$request->product_barcode_qr_code;
        $data['product_name']=$request->product_name;
        $data['product_details']=$request->product_details;
        $data['category_id']=$request->category_id;
        $data['product_per_cartoon']=$request->product_per_cartoon;
        $data['sell_price']=$request->sell_price;
        $data['supplier_price']=$request->supplier_price;
        $data['model']=$request->model;
        $data['supplier_id']=$request->supplier_id;
        // $data['supplier_price']=$request->supplier_price;
        $image=$request->file('image');

    if ($image) {

        $image_name = Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='Product_images/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if ($success) {

            $data['image'] = $image_url;

            DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);
            return Redirect::to('all-products');

            }
            }

            DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);

        return Redirect::to('all-products');

    }

    public function delete_product( Request $request, $product_id){

        $product=Product::findOrFail($product_id);
        $product->delete();
        return Redirect::to('all-products');
    }

    public function product_reports(){

        // $products =DB::table('products')
        // ->join('categories','products.category_id', '=', 'categories.category_id')
        // ->join('suppliers', 'products.supplier_id', '=', 'suppliers.supplier_id')
        // ->select('products.*', 'categories.category_name', 'suppliers.supplier_name')
        // ->get();
         $products = Product::all();
          view()->share('store.all_products_reports',$products);
        $pdf = PDF::loadView('store.all_products_reports', compact('products'));
        // dd($pdf);
        // return $pdf->stream('products.pdf');
        return $pdf->download('products.pdf');



    }

}

