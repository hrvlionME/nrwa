<?php

use App\Http\Controllers\ProdavnicaController;
use App\Http\Controllers\ArtikalController;

Route::resource('prodavnice', ProdavnicaController::class)->parameters([
    'prodavnice' => 'prodavnica',
]);

Route::resource('artikli', ArtikalController::class)->parameters([
    'artikli' => 'artikal',
]);