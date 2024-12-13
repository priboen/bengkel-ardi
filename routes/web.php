<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\IncomingItemController;
use App\Http\Controllers\OutgoingItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('pages.admin.auth.login');
})->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.admin.dashboard', ['type_menu' => 'home']);
    })->name('home');

    Route::resource('product', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('incoming', IncomingItemController::class);
    Route::resource('outgoing', OutgoingItemController::class);
});
