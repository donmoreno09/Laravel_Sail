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
    return view('transactions', [
        'totalIncome' => 50000,
        'totalExpense' => 45000,
        'netSavings' => 5000,
        'goal' => 10000
    ]);
});

Route::get('/categories', function () {
    return view('categories');
});