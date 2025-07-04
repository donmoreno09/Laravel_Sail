 <div class="bg-white shadow rounded-lg p-4 flex items-center">
    <div class="bg-green-100 p-3 rounded-full">
        <svg class="size-8 text-green-500" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>
    </div>
    <div class="ml-4 text-left">
        <h3 class="text-gray-500 text-sm font-medium">{{ $label }}</h3>
        <p class="text-2xl font-semibold text-gray-900">${{ number_format($amount, 2) }}</p>
    </div>
</div>
