<?php

use App\Http\Controllers\ProdavnicaController;

Route::resource('prodavnice', ProdavnicaController::class)->parameters([
    'prodavnice' => 'prodavnica',
]);
