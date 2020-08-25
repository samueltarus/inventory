<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin','AdminDashboardController@dashboard')->middleware('admin');

// sale routes
Route::get('sales','SaleDashboardController@dashboard')->middleware('sales');


//store
Route::get('store','StoreController@dashboard')->middleware('store');
 Route::get('all-categories','Store\CategoryController@all_categories')->name('all-category')->middleware('store');
 Route::get('add-category','Store\CategoryController@add_category')->name('add-category')->middleware('store')->middleware('store');
 Route::post('save-category','Store\CategoryController@save_category');
 Route::get('edit-category/{category_id}','Store\CategoryController@edit_category');
 Route::post('update-category/{category_id}','Store\CategoryController@update_category');
 Route::get('delete-category/{category_id}','Store\CategoryController@delete_category');


 Route::get('all-products','Store\ProductController@all_products')->name('all-category')->middleware('store');
 Route::get('add-product','Store\ProductController@add_product')->name('add-product')->middleware('store');
 Route::post('save-product','Store\ProductController@save_product');

 Route::get('all-suppliers','Store\SupplierController@all_suppliers')->name('all-suppliers')->middleware('store');
 Route::get('add-supplier','Store\SupplierController@add_supplier')->name('add-supplier')->middleware('store');
 Route::post('save-supplier','Store\SupplierController@save_supplier');





//finance
Route::get('finance','FinanceController@dashboard')->middleware('finance');


//hrm
Route::get('HRM','HRController@dashboard')->middleware('HRM');

//customer
Route::get('customer','AdminDashboardController@dashboard')->middleware('cutomer');
