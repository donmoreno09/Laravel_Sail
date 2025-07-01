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
        $this->app->bind('paymentProcessor', function (Application $app) {
            return $app->make(Stripe::class, ['config' => []]);
        });
    }

    public function provides(): array
    {
        return ['paymentProcessor'];
    }
 }
