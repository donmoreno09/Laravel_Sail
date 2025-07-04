@extends('layout')

@section('header-title')
Transactions
@endsection

@section('header')
    @parent
    <div class="w-full py-3 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">

            <x-cards.stat label="Total Income" :amount="$totalIncome" color="green"/>
            <x-cards.stat label="Total Expense" :amount="$totalExpense" color="red"/>
            <x-cards.stat label="Net Savings" :amount="$netSavings" color="blue"/>
            <x-cards.stat label="Goal" :amount="$goal" color="yellow"/>

            {{-- <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="bg-red-100 p-3 rounded-full">
                    <svg class="size-8 text-red-500" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                    </svg>
                </div>
                <div class="ml-4 text-left">
                    <h3 class="text-gray-500 text-sm font-medium">Total Expense</h3>
                    <p class="text-2xl font-semibold text-gray-900">$45,000.00</p>
                </div>
            </div>
            
            <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="bg-blue-100 p-3 rounded-full">
                    <svg class="size-8 text-blue-500" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                    </svg>
                </div>
                <div class="ml-4 text-left">
                    <h3 class="text-gray-500 text-sm font-medium">Net Savings</h3>
                    <p class="text-2xl font-semibold text-gray-900">$5,000.00</p>
                </div>
            </div>
            
            <div class="bg-white shadow rounded-lg p-4 flex items-center">
                <div class="bg-yellow-100 p-3 rounded-full">
                    <svg class="size-8 text-yellow-500" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                    </svg>
                </div>
                <div class="ml-4 text-left">
                    <h3 class="text-gray-500 text-sm font-medium">Goal</h3>
                    <p class="text-2xl font-semibold text-gray-900">$7,500.00</p>
                </div>
            </div> --}} 
        </div>
    </div>
@endsection

@section('content')
Transactions
@endsection