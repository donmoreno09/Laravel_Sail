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

    <div class="mt-6">
        <table class="min-w-full bg-white divide-gray-400">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($transactions as $transaction)
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ \Carbon\Carbon::parse($transaction->transaction_date)->format('m/d/Y g:i A') }}
                        </td>
                        <td class="px-6 py-4 font-medium whitespace-nowrap text-sm {{ $transaction->amount < 0 ? 'text-red-600' : 'text-green-600' }}">
                            @if ($transaction->amount < 0)
                                (${{ number_format(abs($transaction->amount), 2) }})
                            @else
                                ${{ number_format($transaction->amount, 2) }}
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $transaction->description }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm flex gap-2 justify-end">
                            <div>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                    @csrf
                                    @method('DELETE')
                                    <x-btn type="danger" :submit="true">Delete</x-btn>
                                </form>
                                <x-btn :link="route('transactions.edit', $transaction->id)">
                                    Edit
                                </x-btn>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            No transactions found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layout>