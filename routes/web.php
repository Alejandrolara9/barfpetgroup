<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;

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
    return view('welcome');
});
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('providers', ProviderController::class)->names('providers');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('products', ProductController::class)->names('products');
Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::resource('sales', SaleController::class)->names('sales');

Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/prueba2', function () {
    return view('prueba2');
});
// Route::resource('', 'PurchaseDetailController');
// Route::resource('', 'SaleDetailController');







