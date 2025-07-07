<x-layout title="Add New Transaction" header-title="Add New Transaction">
    <div class="max-w-md mx-auto">
        <form action="{{ route('transactions.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="date" class="block text-gray-700 mb-1">Transaction Date</label>
                <input 
                    type="datetime-local"
                    name="date"
                    id="date"
                    class="w-full border-slate-200 rounded p-2 focus:outline-blue-500 border-2"
                    required
                />
            </div>
            
            <div>
                <label for="amount" class="block text-gray-700 mb-1">Transaction Amount</label>
                <input 
                    type="number"
                    step="0.01"
                    name="amount"
                    id="amount"
                    class="w-full border-slate-200 rounded p-2 focus:outline-blue-500 border-2"
                    placeholder="e.g. -50.00 or 100.00"
                    required
                />
            </div>
            
            <div>
                <label for="description" class="block text-gray-700 mb-1">Description</label>
                <textarea 
                    name="description"
                    id="description"
                    rows="4"
                    class="w-full border-slate-200 rounded p-2 focus:outline-blue-500 border-2"
                    placeholder="Optional details about the transaction..."
                ></textarea>
            </div>
            
            <div class="flex gap-2">
                <a href="{{ route('transactions.index') }}" 
                   class="flex-1 bg-gray-500 text-white py-2 px-4 rounded text-center hover:bg-gray-600">
                    Cancel
                </a>
                <button type="submit" 
                        class="flex-1 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    Save Transaction
                </button>
            </div>
        </form>
    </div>
</x-layout>