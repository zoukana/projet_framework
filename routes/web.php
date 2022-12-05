<?php

use Illuminate\Routing\Support\Facades\groupe;

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

Route::get('/post', function () {
    return view('inscription');
});


Route::get('/', function () {
    return view('connexion');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post("/connexion",[postcontroller::class,"connexion"]);
Route::post("/inscription",[postcontroller::class,"inscription"]);


/* Route::get('/admin', 'postController@index')->name('admin')->middleware('admin');
Route::get('/user', 'postController@index')->name('user')->middleware('user');  */
/* 
 Route::middleware(['auth','roles:admin'])->group(function(){
    Route::get('/', function () {
        // ...
    });

}) ;  */ 
/*  Route::get('/private',function(){
    return 'welcome';
});  */
   

/* 
Route::get('/user', [postcontroller::class, '/user']); 


Route::get('/admin', [postcontroller::class, '/admin']);
Route::get('signout', [postontroller::class, 'signOut'])->name('signout'); */


/*  Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', function () {
        // ...
    });
}); */ 

/*
|--------------------------------------------------------------------------
| Web Routes:insertion image
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





