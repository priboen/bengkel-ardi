<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IncomingItemController;
use App\Http\Controllers\OutgoingItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/produk', [PromoController::class, 'promosForFrontend'])->name('produk');
Route::post('/produk/filter', [PromoController::class, 'filterProducts'])->name('produk.filter');


Route::get('login', function () {
    return view('pages.admin.auth.login');
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('home', [AdminDashboardController::class, 'index'])->name('home');
    Route::resource('promos', PromoController::class);
    Route::resource('product', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('incoming', IncomingItemController::class);
    Route::resource('outgoing', OutgoingItemController::class);
});
