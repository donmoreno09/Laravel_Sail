<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Lottery;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.welcome');
});

Route::view(
    '/examples/if',
    'examples.if',
    [
        'isAdmin' => false,
        'isEditor' => true,
        'items' => []
    ]
);

Route::view(
    '/examples/switch',
    'examples.switch',
    [
        'role' => 'editor'
    ]
);

Route::view(
    '/examples/loops',
    'examples.loops',
    [
        'users' => ['Alice', 'Bob', 'Charlie'],
        'tasks' => [],
        'numbers' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
    ]
);