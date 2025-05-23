<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\ProductPhotoController;

Route::apiResource('employees', EmployeeController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('locations', LocationController::class);
Route::apiResource('productphoto', ProductPhotoController::class);
Route::get('/productphoto/image/{id}', [ProductPhotoController::class, 'image']);
Route::get('/productphoto/prikazi/{id}', [ProductPhotoController::class, 'prikazi']);
