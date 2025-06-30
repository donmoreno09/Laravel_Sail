<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserRole;
use App\Http\Middleware\SomeOtherMiddleware;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProcessTransactionController;

Route::get('/', function () {
    dd(app());

    return view('welcome');
});

Route::prefix('administration')->middleware([CheckUserRole::class, SomeOtherMiddleware::class])->group(function () {
    Route::get('/', function (){
        return 'Secret Admin Page';
    });

    Route::get('/other', function () {
        return 'Another Page';
    })->withoutMiddleware(SomeOtherMiddleware::class);


});

// Route::get('/administration', function () {
//     return 'Secret Admin Page';
// })->middleware(CheckUserRole::class);


// Route::get('/administration/other', function () {
//     return 'Another Page';
// })->middleware(CheckUserRole::class);

// Route::name('transactions.')->prefix('transactions')->group(function () {
//     Route::controller(TransactionController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('/create', 'create')->name('create');
//         Route::get('/{transactionId}', 'show')->name('show');
//         Route::post('/', 'store')->name('store');
//         Route::get('/{transactionId}/dopcuments')->name('documents');
//     });

//     Route::get('/{transactionId}/process', ProcessTransactionController::class)->name('process');
// });

// Route::prefix(('transactions'))->group(function () {

//     Route::controller(TransactionController::class)->group(function () {

//         Route::name('transactions.')->group(function () {
//             Route::get('/', 'index')->name('index');
//             Route::get('/create', 'create')->name('create');
//             Route::get('/{transactionId}', 'show')->name('show');
//             Route::post('/', 'store')->name('store');
//         });
//         // Route::get('/', 'index')->name('transactions.index');
//         // Route::get('/create', 'create')->name('transactions.create');
//         // Route::get('/{transactionId}', 'show')->name('transactions.show');
//         // Route::post('/', 'store')->name('transactions.store');
//     });

//     // Route::get('/', [TransactionController::class, 'index']);
//     // Route::get('/create', [TransactionController::class, 'create']);
//     // Route::get('/{transactionId}', [TransactionController::class, 'show']);
//     // Route::post('/', [TransactionController::class, 'store']);

//     Route::get('/{transactionId}/process', ProcessTransactionController::class);
// });

// Route::get('/transactions', [TransactionController::class, 'index']);
// Route::get('/transactions/create', [TransactionController::class, 'create']);
// Route::get('/transactions/{transactionId}', [TransactionController::class, 'show']);
// Route::post('/transactions', [TransactionController::class, 'store']);

// Route::get('transactions/{transactionId}/process', ProcessTransactionController::class);