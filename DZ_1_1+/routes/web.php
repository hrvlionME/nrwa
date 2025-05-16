<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductPhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);
Route::resource('products', ProductController::class);
Route::resource('locations', LocationController::class);
Route::resource('productphoto', ProductPhotoController::class);
Route::get('/productphoto/image/{id}', [App\Http\Controllers\ProductPhotoController::class, 'image'])->name('productphoto.image');
Route::get('/prikazi/{id}', [App\Http\Controllers\ProductPhotoController::class, 'prikazi'])->name('productphoto.prikazi');

