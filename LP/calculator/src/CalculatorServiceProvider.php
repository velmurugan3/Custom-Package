<?php

namespace LP\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('LP\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views','calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
    }
}
