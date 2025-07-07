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

    public function find(int $transactionId): ?\stdClass 
    {
        return $this->db->selectOne('SELECT * FROM transactions WHERE id = ?', [$transactionId]);
    }
    
    public function create(float $amount, Carbon $date, string $description): bool
    {
        return $this->db->insert('INSERT INTO transactions (amount, transaction_date, description, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())', [
            $amount,
            $date,
            $description,
        ]);
    }

    public function getAll(): array
    {
        return $this->db->select('SELECT * FROM transactions ORDER BY transaction_date DESC, created_at DESC');
    }   

    public function update(int $transactionId, float $amount, Carbon $date, string $description)
    {
        return $this->db->update('UPDATE transactions SET amount = ?, transaction_date = ?, description = ?, updated_at = NOW() WHERE id = ?', [
            $amount,
            $date,
            $description,
            $transactionId,
        ]);
    }

    public function delete(int $transactionId): int
    {
        return $this->db->delete('DELETE FROM transactions WHERE id = ?', [$transactionId]);
    }
}