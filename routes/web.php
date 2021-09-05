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
});
//Route::get('/admin/store/product',function (){
//    return view('Admin.product.store');
//});

Route::get('/dashboard', function () {

    return view('Client.profile');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/',[\App\Http\Controllers\HomeController::class,'homepage'] );
Route::resource('admin/products', \App\Http\Controllers\Admin\ProductController::class);
Route::resource('admin/users', \App\Http\Controllers\Admin\UserController::class);

Route::get('/front/product/{id}',[\App\Http\Controllers\Client\ProductController::class,'singleProduct']);

Route::post('/product/deleteImage/{id}',[\App\Http\Controllers\Admin\ProductController::class,'deleteImage']);

//
//Route::get('/dashboard/{id}', function ($id) {
//    $user = \App\Models\User::find($id);
//    return view('Client.profile' ,compact('user'));
//})->middleware(['auth'])->name('dashboard');


