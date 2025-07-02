<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Lottery;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/transactions', function () {
    return view('transactions');
});

Route::get('/categories', function () {
    return view('categories');
});