<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Lottery;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/examples/arr', function () {

    $order = [
        'order_id' => '123',
        'customer' => [
            'name'  => 'John Doe',
            'email' => 'john@doe.com',
            'address' => [
                'address' => '123 Main St',
                'city'    => 'New York',
                'state'   => 'NY',
                'zip'     => '10001',
            ],
        ],
        'shipping_address' => [
            'address' => '123 Main St',
            'city'    => 'New York',
            'state'   => 'NY',
            'zip'     => '10001',
        ],
        'items' => [
            ['name' => 'Laptop',     'price' => 1200],
            ['name' => 'Phone',      'price' => 700],
            ['name' => 'Headphones', 'price' => 100],
        ],
        'sub_total'     => 2000,
        'discount'      => 100,
        'shipping_cost' => 30,
        'total'         => 1930,
        'status'        => 'pending',
    ];

    // Ottenere un valore annidato
    $city = Arr::get($order, 'customer.address.city');

    // Modificare un valore annidato
    Arr::set($order, 'customer.address.zip', '10002');

    // Recuperare il nuovo valore modificato
    $zip = Arr::get($order, 'customer.address.zip');

    return [
        'city' => $city,
        'zip'  => $zip,
    ];
});

Route::get('/examples/lottery', function() {
    $result = Lottery::odds(9, 10)
        ->winner(fn() => 'WINNER!')
        ->loser(fn() => 'LOSER!')
        ->choose(10);

    return $result;
});


Route::get('/examples/benchmark', function () {
    $orderItems = [
        ['name' => 'Laptop', 'price' => 1200, 'quantity' => 1],
        ['name' => 'Phone', 'price' => 800, 'quantity' => 2],
        ['name' => 'Desk', 'price' => 150, 'quantity' => 1],
        ['name' => 'Chair', 'price' => 100, 'quantity' => 4],
    ];

    $method1 = function (array $orderItems) {
        $total = 0;
        foreach ($orderItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    };

    $method2 = function (array $orderItems) {
        return array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $orderItems));
    };

    $results = Benchmark::measure(
        [
            'Total calculation with foreach (Method 1)' => fn() => $method1($orderItems),
            'Total calculation with array_sum/array_map (Method 2)' => fn() => $method2($orderItems),
        ]
    );

    return $results;
});


