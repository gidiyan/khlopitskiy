<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin'], function() {
    Route::get('', 'Dashboard')->name('home');
    Route::resource('products', 'ProductsController');
});
Route::get('/', 'App\Http\Controllers\ProductsController@index')->name('main.page');
Route::get('/by_brand/{id}', [App\Http\Controllers\ProductsController::class, 'getByBrand'])->name('product.by.brand');
Route::get('/product/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('site.product');


