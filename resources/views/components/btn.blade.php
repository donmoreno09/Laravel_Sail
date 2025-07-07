@props([
    'type' => 'primary',
    'link' => null,
    'submit' => false
])

@php
    $classes = match($type) {
        'danger' => 'bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 text-sm font-medium rounded',
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 text-sm font-medium rounded',
        default => 'bg-gray-600 hover:bg-gray-700 text-white px-3 py-1.5 text-sm font-medium rounded'
    };
@endphp

@if($link)
    <a href="{{ $link }}" class="{{ $classes }}">
        {{ $slot }}
    </a>
@else
    <button type="{{ $submit ? 'submit' : 'button' }}" class="{{ $classes }}">
        {{ $slot }}
    </button>
@endif</div>