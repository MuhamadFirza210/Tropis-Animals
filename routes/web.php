<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tentangkamicontroller;
use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\galericontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontaksController;
use App\Http\Controllers\visimisicontroller;
use App\Http\Controllers\kontak2controller;
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

Route::get('/', function () {
    return view('/index');
});

Route::get('/',[ HomeController::class,'home']

);

Route::get('/beritaa',[ HomeController::class,'berita']

);

Route::get('/tentang',[ HomeController::class,'tetangkami']

);

Route::get('/galerii',[ HomeController::class,'galeri']
);



Route::resource('kontak', KontaksController::class);

Route::resource('tentangkami', tentangkamicontroller::class);
Route::resource('berita', beritacontroller::class);
Route::resource('galeri', galericontroller::class);
Route::resource('visimisi', visimisicontroller::class);
Route::resource('kontak2', kontak2controller::class);
Route::get('/admin',function(){
    return view('layout.admin');
});

// Route::get('/login', [Logincontroller::class,"index"]);
// Route::post('/login', [Logincontroller::class,"authenticate"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcomes', function () {
    return view('welcomes');
});

// Route::post('/logout',[ LoginController::class,'logout']
// );

Route::get('/beritaa/{berita:slug}',[ HomeController::class,'showberita']
);
