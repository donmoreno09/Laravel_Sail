<?php

declare(strict_types=1);

namespace App\Providers;

class PaymentServiceProvider
{
    public function process(): bool {
            echo 'Paid' . PHP_EOL;

            return true;
    }

}