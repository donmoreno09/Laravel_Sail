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
        Route::get('/{transactionId}/edit', 'edit')->name('transactions.edit');
        Route::put('/{transactionId}', 'update')->name('transactions.update');
        Route::post('/', 'store')->name('transactions.store');  
        Route::delete('/{transactionId}', 'destroy')->name('transactions.destroy');
    });
});

Route::get('/categories', function () {
    return view('categories');
});