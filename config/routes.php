<?php

use Framework\Route;

Route::get('/', function () {
    return 'Home page';
});

Route::get('/about', function () {
    return 'About page';
});