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

Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/san-pham', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/san-pham/{link}/', [App\Http\Controllers\ProductController::class, 'productDetail'])->name('productDetail');
Route::get('/gioi-thieu', function () {
    return view('about');
});

Route::get('/nha-may', function () {
    return view('factory');
});

Route::get('/chinh-sach', function () {
    return view('policy');
});

Route::get('/lien-he', function () {
    return view('contact');
});

Route::get('/tin-tuc', function () {
    return view('blog');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/admin/them-san-pham/', [App\Http\Controllers\HomeController::class, 'addProduct'])->name('addProduct');
Route::get('/admin/sua-san-pham/{id}', [App\Http\Controllers\HomeController::class, 'editProduct'])->name('editProduct');
Route::post('/admin/postAddOrEditProduct/', [App\Http\Controllers\HomeController::class, 'postAddOrEditProduct'])->name('postAddOrEditProduct');
Route::get('/admin/delete/{id}', [App\Http\Controllers\HomeController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/admin/delete-images/{id}/{value}', [App\Http\Controllers\HomeController::class, 'deleteImage'])->name('deleteImage');

