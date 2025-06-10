<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/slot', function() {
    return view('pages.dashboard');
});
