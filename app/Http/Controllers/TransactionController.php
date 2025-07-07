<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use App\Services\TransactionService;
use Illuminate\Http\RedirectResponse;

readonly class TransactionController
{
    public function __construct(public readonly TransactionService $transactionService, public Redirector $redirect) 
    {
    }

    public function index(): View
    {

        $transactions = $this->transactionService->getAll();
        $income = $this->transactionService->getTotalIncome();
        $expense = $this->transactionService->getTotalExpense();

        // dd($transactions);

        return view('transactions.index', [
            'totalIncome' => $income,
            'totalExpense' =>$expense,
            'netSavings' => $income - $expense,
            'goal' => 0,
            'transactions' => $transactions,
        ]);
    }

    public function edit(int $transactionId): View
    {
        $transaction = $this->transactionService->find($transactionId);

        return view('transactions.edit', [
            'transactionId' => $transactionId,
            'date' => $transaction->transaction_date,
            'amount' => $transaction->amount,
            'description' => $transaction->description,
        ]);
    }

    public function update(Request $request, int $transactionId): RedirectResponse
    {
        $amount = $request->get('amount');
        $date = $request->get('date');
        $description = $request->get('description');

        $this->transactionService->update($transactionId, $amount, new Carbon($date), $description);

        return $this->redirect->to(route('transactions.index'))->with('success', 'Transaction updated successfully.');
    }

    public function destroy(int $transactionId): RedirectResponse
    {
        $this->transactionService->delete($transactionId);

        return redirect(route('transactions.index'))->with('success', 'Transaction deleted successfully.');
        // or i can also use $this->redirect->to(route('transactions.index'))->with('success', 'Transaction deleted successfully.'); with dependency injection of Redirect facade
    }

    public function create(): View
    {
        return view('transactions.create');
    }

    public function store(Request $request, TransactionService $transactionService)
    {
        $amount = $request->get('amount');
        $date = $request->get('date');
        $description = $request->get('description');

        $transactionService->create($amount, new Carbon($date), $description);

        return $this->redirect->to(route('transactions.index'))->with('success', 'Transaction created successfully.');
    }
}

