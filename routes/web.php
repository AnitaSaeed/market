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

Route::get('/', function () {
    return view('Client.homepage');
});
//
//Route::get('/dashboard/{id}', function ($id) {
//    $user = \App\Models\User::find($id);
//    return view('Client.profile' ,compact('user'));
//})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {

    return view('Client.profile');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
