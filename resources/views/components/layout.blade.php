<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Laravel'}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen">
    
    <x-nav />

    @isset($header)
    
        @if($extendedHeader ?? false)
            <x-header> {{ $headerTitle ?? 'Default Title' }} </x-header>
        @endif

        {{ $header }}
    
    @else

        <x-header> {{ $headerTitle ?? 'Default Title' }} </x-header>

    @endisset

    <!-- Main content -->
    <main class="p-6">
        <!-- Content card -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg text-gray-700">
                {{ $slot }}
            </h2>
            <div class="h-96">
                <!-- Content goes here -->
            </div>
        </div>
    </main>
</body>
</html>