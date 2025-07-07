<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Laravel'}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    <main>
        <div class="w-full py-6 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg py-6 px-4 min-h-96">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>
</html>