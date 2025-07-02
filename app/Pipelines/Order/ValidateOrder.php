<?php

declare(strict_types=1);

namespace App\Pipelines\Order;

class ValidateOrder
{

    public function handle(array $order, \Closure $next)
    {
        echo "Validating order...\n";

        return $next($order);
    }
}