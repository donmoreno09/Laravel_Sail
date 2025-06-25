<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProcessTransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/create', [TransactionController::class, 'create']);
Route::get('/transactions/{transactionId}', [TransactionController::class, 'show']);
Route::post('/transactions', [TransactionController::class, 'store']);

Route::get('transactions/{transactionId}/process', ProcessTransactionController::class);