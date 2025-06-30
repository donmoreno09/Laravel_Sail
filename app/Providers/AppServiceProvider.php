<?php

namespace App\Providers;

use App\Services\Stripe;
use App\Contracts\PaymentProcessor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        PaymentProcessor::class => Stripe::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(PaymentProcessor::class, Stripe::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::pattern('transactionId', '[0-9]+');
        Route::pattern('fileId', '[0-9]+');
    }
}
