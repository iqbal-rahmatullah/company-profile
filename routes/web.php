<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});
Route::get('/product', [ProductController::class, 'index']);
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{article}', [BlogController::class, 'show'])->name('blog.show');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index']);
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});
