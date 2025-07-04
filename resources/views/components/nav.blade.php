<!-- Navigation bar -->
    <nav class="bg-gray-800 text-white p-4 flex items-center">
        <!-- Logo -->
        <div class="mr-8">
            <svg class="w-8 h-8 text-indigo-400" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        </div>
        
        <!-- Nav tabs -->
        <div class="flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Dashboard</a>
            <a href="/transactions" class="{{ request()->is('transactions') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Transactions</a>
            <a href="/categories" class="{{ request()->is('categories') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Categories</a>
        </div>
    </nav>