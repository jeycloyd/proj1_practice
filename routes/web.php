<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QuotationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home']);

//Customers
Route::get('/customers/index', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

//Quotations
Route::get('/quotations/index', [QuotationController::class, 'index'])->name('quotations.index');
Route::get('/quotations/create', [QuotationController::class, 'create'])->name('quotations.create');


