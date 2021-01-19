<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::get('', 'Dashboard')->name('home');

    Route::get('products/trashed', 'ProductController@trashed')->name('products.trashed');
    Route::post('products/restore/{id}', 'ProductController@restore')->name('products.restore');
    Route::delete('products/force/{id}', 'ProductController@force')->name('products.force');
    Route::resource('products', 'ProductController');

    Route::get('brands/trashed', 'BrandController@trashed')->name('brands.trashed');
    Route::post('brands/restore/{id}', 'BrandController@restore')->name('brands.restore');
    Route::delete('brands/force/{id}', 'BrandController@force')->name('brands.force');
    Route::resource('brands', 'BrandController');

    Route::get('categories/trashed', 'CategoryController@trashed')->name('categories.trashed');
    Route::post('categories/restore/{id}', 'CategoryController@restore')->name('categories.restore');
    Route::delete('categories/force/{id}', 'CategoryController@force')->name('categories.force');
    Route::resource('categories', 'CategoryController');

    Route::get('types/trashed', 'JobTypeController@trashed')->name('types.trashed');
    Route::post('types/restore/{id}', 'JobTypeController@restore')->name('types.restore');
    Route::delete('types/force/{id}', 'JobTypeController@force')->name('types.force');
    Route::resource('types', 'JobTypeController');

    Route::get('jobs/trashed', 'JobController@trashed')->name('jobs.trashed');
    Route::post('jobs/restore/{id}', 'JobController@restore')->name('jobs.restore');
    Route::delete('jobs/force/{id}', 'JobController@force')->name('jobs.force');
    Route::resource('jobs', 'JobController');
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
