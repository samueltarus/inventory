<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Product;

use Illuminate\Support\Facades\Redirect;


class ProductController extends Controller
{
    public function all_products(){
        // $products =Product::where('category_id',store()->user()->product_id);

        $products = DB::table('products')
        ->join('categories', 'products.product_id', '=', 'categories.category_id')
        ->join('suppliers', 'products.product_id', '=', 'suppliers.supplier_id')
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

}

