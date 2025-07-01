<?php

namespace App\Providers;

use App\Services\Stripe;
use App\Contracts\PaymentProcessor;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\DeferrableProvider;

class PaymentProcessorProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // dump('PaymentProcessorProvider registered');
        $this->app->bind(PaymentProcessor::class, function (Application $app) {
            return $app->make(Stripe::class, ['config' => []]);
        });

        $this->app->alias(PaymentProcessor::class, 'paymentProcessor');
    }

    public function provides(): array
    {
        return [PaymentProcessor::class, 'paymentProcessor'];
    }
 }
