<?php

namespace App\Providers;

use App\Models\Item_Stock;
use App\Observers\stockIOobserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //observer
        Item_Stock::observe(stockIOobserver::class);
    }
}
