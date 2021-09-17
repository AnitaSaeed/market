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
Route::get('/admin/dashboard',function (){
    return view('Admin.dashboard');
})->middleware('admin','auth');
//Route::get('/admin/store/product',function (){
//    return view('Admin.product.store');
//});

Route::get('/dashboard', function () {

    return view('Client.profile');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/orders',[\App\Http\Controllers\Client\OrderController::class,'index']);
Route::post('/dashboard/orders/detail/{id}',[\App\Http\Controllers\Client\OrderController::class,'showDetail']);

require __DIR__.'/auth.php';
Route::get('/',[\App\Http\Controllers\HomeController::class,'homepage'] )->name('home');
Route::resource('admin/products', \App\Http\Controllers\Admin\ProductController::class);
Route::resource('admin/users', \App\Http\Controllers\Admin\UserController::class);
Route::resource('admin/categories', \App\Http\Controllers\Admin\CategoryController::class);
Route::resource('admin/orders', \App\Http\Controllers\Admin\OrderController::class);

Route::post('admin/order/accept/{id}',[\App\Http\Controllers\Admin\OrderController::class,'acceptOrder']);
Route::post('admin/order/deny/{id}',[\App\Http\Controllers\Admin\OrderController::class,'denyOrder']);


Route::get('/front/product/{id}',[\App\Http\Controllers\Client\ProductController::class,'singleProduct']);

Route::post('/product/deleteImage/{id}',[\App\Http\Controllers\Admin\ProductController::class,'deleteImage']);
Route::post('/delete/category/{product_id}/{category_id}',[\App\Http\Controllers\Admin\ProductController::class,'deleteOldCat']);
Route::get('/cart/{id}',[\App\Http\Controllers\Client\CartController::class,'addToCart']);
Route::get('/cart-list',[\App\Http\Controllers\Client\CartController::class,'index']);
Route::get('/order',[\App\Http\Controllers\Client\CartController::class,'createOrder']);

Route::get('/category/{id}',[\App\Http\Controllers\Client\CategoryController::class,'index']);

//Route::get('/admin/login',function (){
//    return view('Admin.login');
//})->middleware(['admin']);
////
//Route::get('/dashboard/{id}', function ($id) {
//    $user = \App\Models\User::find($id);
//    return view('Client.profile' ,compact('user'));
//})->middleware(['auth'])->name('dashboard');


