<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CatController;


Route::get('/gatos', [CatController::class, 'listarGatos']);