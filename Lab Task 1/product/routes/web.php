<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service;
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
    return view('Home');
});


 
Route::get('/product/service',[service::class, 'index'])->name('product');

Route::get('/team', function () {
    return view('teams');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



