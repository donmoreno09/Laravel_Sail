<?php

declare(strict_types=1);

namespace App\Pipelines\Order;

class GenerateInvoice
{
    public function handle(array $order, \Closure $next)
    {
        echo "Generating Invoice...\n";

        $order['invoice_id'] =  rand(1000, 9999);

        return $next($order);
    }
}