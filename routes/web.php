<?php

use App\Http\Controllers\MollieController;
use App\Http\Controllers\ProductController;
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

// producten
Route::get('/producten', [\App\Http\Controllers\ProductController::class, 'allProducts'])
        ->name('products.all');

Route::post('/producten', [\App\Http\Controllers\CartController::class, 'store'])
    ->name('cart.store');
Route::get('/admin/upload-product', [ProductController::class,'uploadProduct']);
Route::get('/product-images/{id}',[ProductController::class,'images'])
    ->name('product.images');
Route::post('/add-product',[ProductController::class,'store']);

// cart
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])
    ->name('cart.index');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'doRemove'])
    ->name('cart.index');

// login / register


Route::group(['middleware' => 'auth'], function () {
    Route::get('/account', [\App\Http\Controllers\HomeController::class, 'account']);
});

// home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);


// Mollie
Route::get('mollie-payment',[MollieController::Class,'preparePayment'])->name('mollie.payment');
Route::get('payment-success',[MollieController::Class, 'paymentSuccess'])->name('paymentSuccess');
Route::name('webhooksMollie')->post('webhooks/mollie', 'MollieWebhookController@handle');
Route::get('/failed', function () {
    return view('failed', ['name' => 'James']);
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
