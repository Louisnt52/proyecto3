<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {
    Route::resource('personas', PersonaController::class);
});
