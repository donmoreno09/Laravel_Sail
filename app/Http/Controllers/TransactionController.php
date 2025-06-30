<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TransactionService;

class TransactionController
{

    public function __construct(private readonly TransactionService $transactionService)
    {
        
    }
    
    public function index(): string
    {

        return 'Transactions Page';
    }

    public function show(int $transactionId): string
    {
        $transaction = $this->transactionService->findTransactionById($transactionId);

        return 'Transactioon ID: ' . $transaction['transactionId'] . ', Amount: ' . $transaction['amount'] . ', Currency: ' . $transaction['currency'] . ', Status: ' . $transaction['status'];
    }

    public function create(): string
    {
        return 'Create Transaction Page';
    }

    public function store(Request $request): string
    {
        // Here you would typically handle the request to create a new transaction
        // For simplicity, we will just return a success message
        return 'Transaction created successfully';
    }
}
