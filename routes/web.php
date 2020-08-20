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
Route::get('sales','SaleDashboardController@dashboard')->middleware('sales');
Route::get('store','StoreController@dashboard')->middleware('store');
Route::get('finance','FinanceController@dashboard')->middleware('finance');
Route::get('HRM','HRController@dashboard')->middleware('HRM');
Route::get('customer','AdminDashboardController@dashboard')->middleware('cutomer');
