<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

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
    return view('connexion');
});

Route::get('/inscription', function () {
    return view('inscription');
});


Route::get('/', function () {
    return view('connexion');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get("/connexion",[postcontroller::class,"inscription"]);
Route::post("/inscription",[postcontroller::class,"inscription"]);




Route::get('/admin', 'postController@index')->name('admin')->middleware('admin');
Route::get('/user', 'postController@index')->name('user')->middleware('user');



