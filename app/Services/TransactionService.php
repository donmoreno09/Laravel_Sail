<?php

declare(strict_types=1);

namespace App\Services;

class TransactionService
{
    public function findTransactionById(int $transactionId): array
    {
        // Simulate fetching a transaction from a database
        // In a real application, you would use Eloquent or Query Builder here
        return [
            'transactionId' => $transactionId,
            'amount' => 100.00,
            'currency' => 'USD',
            'status' => 'completed',
        ];
    }
}