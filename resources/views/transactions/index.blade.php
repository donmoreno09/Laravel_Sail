<x-layout title="Transactions" header-title="Transactions" :extended-header="true">

    <x-slot:header>
        <div class="w-full py-3 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
                <x-cards.stat label="Total Income" :amount="$totalIncome" color="green"/>
                <x-cards.stat label="Total Expense" :amount="$totalExpense" color="red"/>
                <x-cards.stat label="Net Savings" :amount="$netSavings" color="blue"/>
                <x-cards.stat label="Goal" :amount="$goal" color="yellow"/>
            </div>
        </div>
    </x-slot:header>

    <div class="flex justify-end mb-4 p-4 rounded-lg">
        <a href="{{ route('transactions.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add New Transaction
        </a>
    </div>
</x-layout>