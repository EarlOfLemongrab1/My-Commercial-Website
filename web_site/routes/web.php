<?php
use App\Http\Controllers\Images;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/user/{id}', [UserController::class, 'show']);



Route::get('/panier', function() {
    return view('panier');
});

Route::get('/product', function() {
    return view('product');
});


Route::get('/admin', function () {
    if (! Gate::allows('accessadmin')){
        return'Access Denied';
    }
    return view('admin');
});
Route::post('/admin',[ProductController::class, 'add']) -> name('new-product');
//save an image
Route::get('upload-image', [ProductController::class,'index']);
Route::get('save',[ProductController::class,'save']);
Route::get('/panier',[ProductController::class, 'index3']);


Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');
Route::get('/catalogue',[ProductController::class, 'index']);
Route::get('/product/{id}',[ProductController::class, 'index2']);

