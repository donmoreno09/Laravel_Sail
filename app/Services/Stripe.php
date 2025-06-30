<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\PaymentProcessor;

readonly class Stripe implements PaymentProcessor
{
    public function __construct(private readonly array $config, private SalesTaxCalculator $salesTaxCalculator)
    {
        dump($config);
    }

    public function process(array $transaction): void
    {
        // Here you would implement the logic to process the payment using Stripe's API
        // For example, you might use the Stripe PHP SDK to create a charge
        // This is just a placeholder implementation
        echo "Processing transaction with Stripe: " . json_encode($transaction);
    }
}