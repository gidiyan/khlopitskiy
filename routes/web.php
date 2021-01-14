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

    Route::get('products/trashed', 'ProductController@trashed')->name('products.trashed');
    Route::post('products/restore/{id}', 'ProductController@restore')->name('products.restore');
    Route::delete('products/force/{id}', 'ProductController@force')->name('products.force');
    Route::resource('products', 'ProductController');
});

Route::get('/', 'App\Http\Controllers\ProductsController@main')->name('main');

Route::get('/pricelist', 'App\Http\Controllers\PriceListController@index')->name('pricelist');
Route::get('/pricelist/{id}', 'App\Http\Controllers\PriceListController@show')->name('pricelist.by.type');

Route::get('/projects', 'App\Http\Controllers\ProductsController@index')->name('products');
Route::get('/by_brand/{id}', [App\Http\Controllers\ProductsController::class, 'getByBrand'])->name('product.by.brand');
Route::get('/by_category/{id}', [App\Http\Controllers\ProductsController::class, 'getByCategory'])->name('product.by.category');
Route::get('/project/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('projects.product');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
