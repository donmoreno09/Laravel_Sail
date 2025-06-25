<?php

use App\Enums\FileType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/transactions/{transactionId}', function (int $id) {
    return 'Showing payment details for transaction id: ' . $id;
})->where('transactionId', '[0-9]+');

// Route::get('/transactions/{transactionId}/files/{fileId}', function (int $transactionId, int $fileId) {
//     return 'Showing file with id ' . $fileId . ' for transaction id: ' . $transactionId;
// });

// Route::get('/transactions/{transactionId}/files/{fileType}', function (int $transactionId, string $fileType) {
//     return 'Showing file with id ' . $fileType . ' for transaction id: ' . $transactionId;
// })->whereIn('fileType', ['pdf', 'csv', 'xml']); //Solo se non definisci Enum FileType

Route::get('/transactions/{transactionId}/files/{fileType}', function (int $transactionId, FileType $fileType) {
    return 'Showing file with id ' . $fileType->value . ' for transaction id: ' . $transactionId;
});

// Route::get('/transactions/{transactionId}/files/{fileId}', function (int $transactionId, int $fileId) {
//     return 'Showing file with id ' . $fileId . ' for transaction id: ' . $transactionId;
// })->whereNumber(['transactionId', 'fileId']); // Solo se non vuoi definire i pattern globali

// Route::post('/transactions/{transactionId}/files/{fileId}', function (int $transactionId, int $fileId) {
//     return 'Showing file with id ' . $fileId . ' for transaction id: ' . $transactionId;
// });

Route::get('/report/{reportId}', function (Request $request, int $reportId) {
    $year = $request->get('year');
    $month = $request->get('month');

    return 'Generating report ' . $reportId . ' for ' . $year . ' and ' . $month;
});

// /report/975?year=2024&month=5