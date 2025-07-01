<?php

declare(strict_types=1);

namespace App\Facades;

use App\Contracts\PaymentProcessor;
use Illuminate\Support\Facades\Facade;

class Payment extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'PaymentProcessor::class';
    }
}