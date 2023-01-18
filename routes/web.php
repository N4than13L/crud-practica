<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

/*
Route::get('/productos', [ProductsController::class, 'index'])->name('productos.index');

Route::get('/products/create', [ProductsController::class, 'create'])->name('productos.create');

Route::post('/products/create', [ProductsController::class, 'store'])->name('productos.store');
*/

Route::resource('productos', ProductsController::class);
