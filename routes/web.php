<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.hero');
});

// Route::get('/about', function () {
//     return view('pages.about');
// });
