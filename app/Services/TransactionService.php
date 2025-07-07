<?php

declare(strict_types=1);

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Database\DatabaseManager;

class TransactionService
{
    public function __construct(public readonly DatabaseManager $db)
    {
    }

    public function findTransaction(int $transactionId): array
    {
        return [
            'transactionId' => $transactionId,
            'amount' => 100.00,
            'currency' => 'USD',
            'status' => 'completed',
        ];
    }
    
    public function create(float $amount, Carbon $date, string $description): bool
    {
        return $this->db->insert('INSERT INTO transactions (amount, transaction_date, description, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())', [
            $amount,
            $date,
            $description,
        ]);
    }

}