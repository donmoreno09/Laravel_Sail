<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen">
    
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
            <a href="/" class="px-4 py-2 bg-gray-900 rounded">Dashboard</a>
            <a href="/transactions" class="px-4 py-2 hover:bg-gray-700 rounded">Transactions</a>
            <a href="/categories" class="px-4 py-2 hover:bg-gray-700 rounded">Categories</a>
        </div>
    </nav>

    @section('header')
        <header class="bg-white shadow">
            <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    @yield('header-title')
                </h1>
            </div>
        </header>
    @show
    <!-- Main content -->
    <main class="p-6">
        
        <!-- Content card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg text-gray-700">
                @yield('content')
            </h2>
            <div class="h-96">
                <!-- Content goes here -->
            </div>
        </div>
    </main>
</body>
</html>