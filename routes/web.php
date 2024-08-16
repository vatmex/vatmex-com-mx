<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/ops/me', function() {
    return view('ops.me.index');
});
