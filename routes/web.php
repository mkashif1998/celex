<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\SliderController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[HomeController::class,'index']);

Route::get('serach-ajax',[HomeController::class,'ajax']);



Route::group(['prefix'=>'/customer'], function(){

    Route::get('about-us',[AboutusController::class,'index']);

    Route::get('blog',[BlogController::class,'index']);
    Route::get('blog-details',[BlogController::class,'blogdetails']);

    Route::get('checkout',[CheckoutController::class,'index']);

    Route::get('contact-us',[ContactusController::class,'index']);

    Route::get('my-account',[MyAccountController::class,'index']);

    Route::get('cart',[CartController::class,'index']);
    Route::post('cart/{id}',[CartController::class,'create']);
    Route::get('cart-item-delete/{id}',[CartController::class,'destroy']);


    Route::get('product',[ProductController::class,'index']);
    Route::get('product-details/{id}',[ProductController::class,'productdetails']);
    Route::post('product',[ProductController::class,'index']);

    Route::get('sign-in',[LoginRegisterController::class,'index']);
    Route::post('/register',[LoginRegisterController::class, 'store']);
    Route::post('/login',[LoginRegisterController::class, 'login']);

    Route::post('/product-feedback/{id}',[ProductController::class,'productfeedback']);

});



Route::group(['prefix'=>'/admin'], function(){

    Route::get('add-product/{id?}',[AddProductController::class, 'index']);
    Route::post('add-new-product',[AddProductController::class, 'create']);
    Route::get('products-view',[AddProductController::class, 'show']);
    Route::get('product-delete/{id}',[AddProductController::class, 'destroy']);
    Route::get('product-edit/{id}',[AddProductController::class, 'edit']);
    Route::post('product-update/{id}',[AddProductController::class, 'update']);

    Route::get('slider',[SliderController::class, 'index']);
    Route::post('slider-data-save',[SliderController::class, 'store']);
    Route::get('slider-delete/{id}',[SliderController::class, 'softdelete']);

});


// ---------------Testing route-------------------------//

Route::get('/test',[CartController::class,'test']);
Route::get('/session',[HomeController::class,'test']);
