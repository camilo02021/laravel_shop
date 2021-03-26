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

Auth::routes();

//User
Route::middleware('auth')->group(function () {
    Route::get('/mi-perfil', [App\Http\Controllers\UsersController::class, 'edit'])->name('user.edit');
    Route::patch('/mi-peril', [App\Http\Controllers\UsersController::class, 'update'])->name('user.update');

    Route::get('/mis-ordenes', [App\Http\Controllers\OrdersController::class, 'index'])->name('user.orders');
    Route::get('/mis-ordenes/{orden}', [App\Http\Controllers\OrdersController::class, 'show'])->name('orders.show');
});
//

//Admin
Route::middleware('admin')->group(function () {
   
});
//

//Front
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landing-page');
Route::get('/productos', [App\Http\Controllers\FrontController::class, 'index'])->name('shop');
Route::get('/producto', [App\Http\Controllers\FrontController::class, 'showProduct'])->name('product.show');
Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');
//

//Cart
Route::get('/cesta', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::post('/cart/recoverItems', [App\Http\Controllers\CartController::class, 'recoverItems']);
Route::patch('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/delete', [App\Http\Controllers\CartController::class, 'delete']);
Route::post('/cart/switchToSaveForLater/{product}', [App\Http\Controllers\CartController::class, 'switchToSaveForLater'])->name('cart.switchToSaveForLater');
//

//Checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index')->middleware('auth');
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');
//Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');
//

Route::get('/aliado', 'AliadosController@index')->name('aliados.index');

Route::get('/search', 'ShopController@search')->name('search');

Route::get('/search-algolia', 'ShopController@searchAlgolia')->name('search-algolia');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
