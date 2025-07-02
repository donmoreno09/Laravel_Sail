<?php

declare(strict_types=1);

namespace App\Pipelines\Order;

class ApplyDiscount
{
    public function handle(array $order, \Closure $next)
    {
        echo "Applying Discount...\n";

        $order['total'] -= $order['discount'] ?? 0;

        return $next($order);
    }
}