<!-- Navigation bar -->
    <nav class="bg-gray-800 text-white p-4 flex items-center">
        <!-- Logo -->
        <div class="mr-8">
            <img 
                class="size-8"
                src="{{Vite::asset('resources/images/logo.png') }}" 
                alt="Your company"
            >
        </div>
        
        <!-- Nav tabs -->
        <div class="flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Dashboard</a>
            <a href="/transactions" class="{{ request()->is('transactions') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Transactions</a>
            <a href="/categories" class="{{ request()->is('categories') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium rounded-md">Categories</a>
        </div>
    </nav>