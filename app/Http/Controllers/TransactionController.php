<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contracts\PaymentProcessor;
use Illuminate\Contracts\View\View;
use App\Services\TransactionService;

class TransactionController
{
    
    public function index(): View
    {

        return view('transactions.index', [
            'totalIncome' => 50000,
            'totalExpense' =>45000,
            'netSavings' => 5000,
            'goal' => 10000
        ]);
    }

    public function show(int $transactionId, TransactionService $transactionService, PaymentProcessor $paymentProcessor): string
    {
        $transaction = $transactionService->findTransaction($transactionId);

        $paymentProcessor->process($transaction);

        return 'Transactioon ID: ' . $transaction['transactionId'] . ', Amount: ' . $transaction['amount'] . ', Currency: ' . $transaction['currency'] . ', Status: ' . $transaction['status'];
    }

    public function create(): View
    {
        return view('transactions.create');
    }

    public function store(Request $request, TransactionService $transactionService): string
    {
        $amount = $request->get('amount');
        $date = $request->get('date');
        $description = $request->get('description');

        $transactionService->create($amount, new Carbon($date), $description);

        return redirect(route('transactions.index'))->with('success', 'Transaction created successfully.');
    }
}

