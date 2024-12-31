<?php

use Framework\Route;

Route::get('/', [\App\Controllers\HomeController::class, 'index']);

Route::get('/about', [\App\Controllers\AboutController::class, 'index']);

Route::get('/contact', [\App\Controllers\ContactController::class, 'index']);
