<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\ProductPhotoController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', function () {
    return response()->json(['message' => 'Logged out (client should forget credentials)']);
});

// OAuth login via Google
Route::get('/auth/google', function () {
    return Socialite::driver('google')->stateless()->redirect();
});

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName(),
            'password' => bcrypt(Str::random(16)),
        ]
    );

    Auth::login($user);

    // Optionally issue Sanctum token (if using API tokens)
    $token = $user->createToken('oauth-login')->plainTextToken;

    return redirect("http://localhost:8080/employees?token=$token");
});

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('employees', EmployeeController::class);
    Route::apiResource('users', UserController::class);

    Route::apiResource('products', ProductController::class);
    Route::apiResource('locations', LocationController::class);
    Route::apiResource('productphoto', ProductPhotoController::class);

    Route::get('/productphoto/image/{id}', [ProductPhotoController::class, 'image']);
    Route::get('/productphoto/prikazi/{id}', [ProductPhotoController::class, 'prikazi']);
});
