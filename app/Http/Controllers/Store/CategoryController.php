<?php

namespace App\Http\Controllers\Store;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function all_categories(){
        $categories =DB::table('categories')->get();

        return view('store.all_category',compact('categories'));
    }
    public function add_category(){
        return view('store.add_category');
    }

    public  function save_category(Request $request){

        $data =array();

        $data['category_name']=$request->category_name;

        DB::table('categories')->insert($data);

        return Redirect::to('all-categories');

    }


    public function edit_category($category_id){
        // $categories =DB::table('categories')->get();
        $categories =Category::find($category_id);
        return view('store.edit_category',compact('categories'));
    }
    public function update_category(Request $request,$category_id){

        $data =array();

        $data['category_name']=$request->category_name;
        DB::table('categories')
            ->where('category_id',$category_id)
            ->update($data);


        return Redirect::to('all-categories');
    }
    public function  delete_category($category_id){


        // $Category->delete($category_id);
        Category::find($category_id)->delete();
        return Redirect::to('all-categories');

      }

}
