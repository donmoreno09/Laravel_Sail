<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentProcessor;
use App\Services\TransactionService;

class TransactionController
{

    public function __construct(private readonly PaymentProcessor $paymentProcessor)
    {
        
    }
    
    public function index(): string
    {

        return 'Transactions Page';
    }

    public function show(int $transactionId, TransactionService $transactionService): string
    {
        $transaction = $transactionService->findTransactionById($transactionId);

        return 'Transactioon ID: ' . $transaction['transactionId'] . ', Amount: ' . $transaction['amount'] . ', Currency: ' . $transaction['currency'] . ', Status: ' . $transaction['status'];
    }

    public function create(): string
    {
        return 'Create Transaction Page';
    }

    public function store(Request $request): string
    {
        // Here you would typically handle the request to create a new transaction
        // For simplicity, we will just return a success message
        return 'Transaction created successfully';
    }
}

/* 

# Laravel Service Container Binding Example

This repository demonstrates how to use Laravel's Service Container to **bind an interface to an implementation**. We'll use a simple example where we bind a `PaymentGateway` interface to a `StripePaymentGateway` implementation and inject it into a controller.

## Table of Contents

- [Overview](#overview)
- [Steps](#steps)
  - [1. Create the Interface](#1-create-the-interface)
  - [2. Create the Implementation](#2-create-the-implementation)
  - [3. Bind the Interface to the Implementation](#3-bind-the-interface-to-the-implementation)
  - [4. Inject the Interface into a Controller](#4-inject-the-interface-into-a-controller)
- [Optional: Using a Singleton](#optional-using-a-singleton)
- [Summary](#summary)
- [Running the Example](#running-the-example)

## Overview

Laravel's Service Container is a powerful tool for managing class dependencies and performing dependency injection. Instead of creating objects manually, you let the container resolve them for you. By binding an interface to an implementation, you can write code that depends on abstractions, making it easier to swap implementations and test your code.

## Steps

### 1. Create the Interface

Create the interface that defines the contract for the payment gateway.

```php
// app/Contracts/PaymentGateway.php
namespace App\Contracts;

interface PaymentGateway {
    public function charge($amount);
}

2. Create the Implementation
Create a concrete class that implements the PaymentGateway interface. In this case, we use StripePaymentGateway.


// app/Services/StripePaymentGateway.php
namespace App\Services;

use App\Contracts\PaymentGateway;

class StripePaymentGateway implements PaymentGateway {
    public function charge($amount) {
        // Implement your Stripe charging logic here
        return "Charging $$amount using Stripe.";
    }
}
3. Bind the Interface to the Implementation
Register the binding in a service provider. This example uses the default AppServiceProvider.


// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGateway;
use App\Services\StripePaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    
     // Register any application services.
    
    public function register()
    {
        // Bind the PaymentGateway interface to the StripePaymentGateway implementation
        $this->app->bind(PaymentGateway::class, StripePaymentGateway::class);
    }

    
    // Bootstrap any application services.
     
    public function boot()
    {
        //
    }
}
4. Inject the Interface into a Controller
Now you can inject the PaymentGateway interface into a controller. Laravel's Service Container will automatically resolve the correct instance.

// app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use App\Contracts\PaymentGateway;

class PaymentController extends Controller
{
    protected $payment;

    public function __construct(PaymentGateway $payment)
    {
        $this->payment = $payment;
    }

    public function pay()
    {
        // Call the charge method on the payment gateway
        return $this->payment->charge(100);
    }
}

Optional: Using a Singleton
If you want only one instance of the StripePaymentGateway to be shared throughout the application, change the binding to a singleton in your service provider:

$this->app->singleton(PaymentGateway::class, StripePaymentGateway::class);

Summary
Interface: Define the contract (PaymentGateway).

Implementation: Create the concrete class (StripePaymentGateway) that implements the interface.

Binding: Bind the interface to the implementation in the service provider (AppServiceProvider).

Injection: Inject the interface into a controller or any class. Laravel automatically resolves the correct instance.



*/