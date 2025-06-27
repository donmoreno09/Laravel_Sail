<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController
{
    
    public function index(Request $request): string
    {

        echo 'Request ID: ' . $request->headers->get('X-Request-ID') . '<br>' . PHP_EOL;

        return 'Transactions Page';
    }

    public function show(int $transactionId): string
    {
        return 'Showing transaction with id: ' . $transactionId;
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
