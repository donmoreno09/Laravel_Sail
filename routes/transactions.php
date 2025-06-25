<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProcessTransactionController;
use Illuminate\Support\Facades\Route;


Route::controller(TransactionController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{transactionId}', 'show')->name('show');
    Route::post('/', 'store')->name('store');
    Route::get('/{transactionId}/dopcuments')->name('documents');
});

Route::get('/{transactionId}/process', ProcessTransactionController::class)->name('process');
