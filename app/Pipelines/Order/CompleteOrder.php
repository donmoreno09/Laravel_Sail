<?php

declare(strict_types=1);

namespace App\Pipelines\Order;

class CompleteOrder
{
    public function handle(array $order, \Closure $next)
    {
        echo "Order completed! \n";

        $order['status'] = 'completed';

        return $next($order);
    }
}