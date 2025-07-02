<?php

declare(strict_types=1);

namespace App\Pipelines\Order;

class CalculateShipping
{
    public function handle(array $order, \Closure $next)
    {
        echo "Calculating shipping...\n";

        // Simulate shipping calculation
        $order['shipping'] = 10.00;

        return $next($order);
    }
}