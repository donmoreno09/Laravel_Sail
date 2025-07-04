<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen">
    
    <x-nav />

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