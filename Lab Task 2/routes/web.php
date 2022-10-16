<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\person;

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
Route::get('home', function () {
    return view('Home');
});

Route::get('/login', [person::class,'loginVeiw'])->name('login');
Route::post('/login', [person::class,'login'])->name('login');
Route::get('/registration', [person::class,'registrationVeiw'])->name('registration');
Route::post('/registration', [person::class,'registration'])->name('registration');
Route::get('/contact', [person::class,'personList'])->name('contact');
Route::post('/contact', [person::class,'contact'])->name('contact');





