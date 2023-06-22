<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CustomerController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('accesories', AccesoryController::class);

Route::resource('phones', PhoneController::class);

Route::resource('records', RecordController::class);

Route::resource('products', ProductController::class);

Route::resource('stocks', StockController::class);

Route::resource('suppliers', SupplierController::class);

Route::resource('sales', SaleController::class);

Route::resource('bills', BillController::class);

Route::resource('customers', CustomerController::class);
