<?php

use App\Http\Controllers\PortofolioController;

Route::get('/', [PortofolioController::class, 'index']);
Route::get('/about', [PortofolioController::class, 'about']);
Route::get('/kontak', [PortofolioController::class, 'contact']);
