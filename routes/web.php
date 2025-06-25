<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProcessTransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix(('transactions'))->group(function () {

    Route::controller(TransactionController::class)->group(function () {
        Route::get('/', 'index')->name('transactions.index');
        Route::get('/create', 'create')->name('transactions.create');
        Route::get('/{transactionId}', 'show')->name('transactions.show');
        Route::post('/', 'store')->name('transactions.store');
    });

    // Route::get('/', [TransactionController::class, 'index']);
    // Route::get('/create', [TransactionController::class, 'create']);
    // Route::get('/{transactionId}', [TransactionController::class, 'show']);
    // Route::post('/', [TransactionController::class, 'store']);

    Route::get('/{transactionId}/process', ProcessTransactionController::class);
});

// Route::get('/transactions', [TransactionController::class, 'index']);
// Route::get('/transactions/create', [TransactionController::class, 'create']);
// Route::get('/transactions/{transactionId}', [TransactionController::class, 'show']);
// Route::post('/transactions', [TransactionController::class, 'store']);

// Route::get('transactions/{transactionId}/process', ProcessTransactionController::class);