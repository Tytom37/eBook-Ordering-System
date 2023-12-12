<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BorrowingController;
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

Route::get('/', function () {
    return view('base');
});

Route::get('/home', function () {
    return view('base');
});

// Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');
Route::post('/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');

// eBook
Route::get('/ebook', [EBookController::class, 'index'])->name('ebook.index');
Route::get('/ebook/create', [EBookController::class, 'create'])->name('ebook.create');
Route::get('/ebook/{ebook}', [EBookController::class, 'edit'])->name('ebook.edit');
Route::post('/ebook', [EBookController::class, 'store'])->name('ebook.store');
Route::delete('/ebook/{ebook}', [EBookController::class, 'destroy'])->name('ebook.destroy');
Route::post('/ebook/{ebook}', [EBookController::class, 'update'])->name('ebook.update');

// Order
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::get('/order/{order}', [OrderController::class, 'edit'])->name('order.edit');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::delete('/order/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::post('/order/{order}', [OrderController::class, 'update'])->name('order.update');

// Borrow
Route::get('/borrowing', [BorrowingController::class, 'index'])->name('borrowing.index');
Route::get('/borrowing/create', [BorrowingController::class, 'create'])->name('borrowing.create');
Route::get('/borrowing/{borrowing}', [BorrowingController::class, 'edit'])->name('borrowing.edit');
Route::post('/borrowing', [BorrowingController::class, 'store'])->name('borrowing.store');
Route::delete('/borrowing/{borrowing}', [BorrowingController::class, 'destroy'])->name('borrowing.destroy');
Route::post('/borrowing/{borrowing}', [BorrowingController::class, 'update'])->name('borrowing.update');