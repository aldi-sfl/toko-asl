<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;

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
    return view('dashboard');
});
Route::get('/', [CategoryController::class, 'dashindex']);
Route::get('/', [ProductController::class, 'dashindex']);

// login regis
// Route::view('/coba', 'coba');

// Route::get('/register', [SessionController::class, 'regindex']);
Route::get('/login', [SessionController::class, 'logindex'])->name('login');
Route::post('/login', [SessionController::class, 'login']);
Route::post('/register', [SessionController::class, 'regstore']);
Route::get('/logout', [SessionController::class, 'logout']);


Route::group(['middleware' => ['auth']], function() { 
    
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    
    
    Route::view('/cart', 'cart.cart');

});    
