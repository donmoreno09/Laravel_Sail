<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('dashboard');
});

Route::prefix('/transactions')->group(function () {
    Route::controller(TransactionController::class)->group(function () {
        Route::get('/', 'index')->name('transactions.index');
        Route::get('/create', 'create')->name('transactions.create'); 
        Route::post('/', 'store')->name('transactions.store');  
        Route::get('/{transactionId}', 'show')->name('transactions.show');
    });
});

Route::get('/categories', function () {
    return view('categories');
});