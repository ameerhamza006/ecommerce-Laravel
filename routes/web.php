<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
    return view('Front.index');
});

//Login Page
Route::get('/login',[FrontController::class,'login']);

//Register Pge
Route::get('register',[FrontController::class,'register']);

//Products Page
Route::get('products',[FrontController::class,'products']);

//Cart Page
Route::get('cart',[FrontController::class,'cart']);

//Checkout Page
Route::get('checkout',[FrontController::class,'checkout']);

//Contact us page
Route::get('contact-us',[FrontController::class,'contact']);


