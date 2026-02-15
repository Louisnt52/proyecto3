<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::apiResource('personas', PersonaController::class);
