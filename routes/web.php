<?php

use App\Exports\IncomingItemsExport;
use App\Exports\OutgoingItemsExport;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IncomingItemController;
use App\Http\Controllers\OutgoingItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/produk', [PromoController::class, 'promosForFrontend'])->name('produk');
Route::get('/produk/{id}', [ProductController::class, 'detailProduk'])->name('produk.detail');
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

    Route::get('/export-incoming-items', function () {
        return Excel::download(new IncomingItemsExport, 'incoming_items.xlsx');
    })->name('export.incoming-items');

    Route::get('/export-outgoing-items', function () {
        return Excel::download(new OutgoingItemsExport, 'outgoing_items.xlsx');
    })->name('export.outgoing-items');
});
