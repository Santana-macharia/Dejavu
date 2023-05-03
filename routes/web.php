<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\ProductsController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/records', [RecordsController::class, 'index']);

Route::post('/product', [ProductsController::class, 'store'])->name('product.store');

Route::get('/products', [ProductsController::class, 'index']);









