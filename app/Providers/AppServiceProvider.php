<?php

namespace App\Providers;

use App\Models\ProductSku;
use App\Observers\ProductSkuObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{

    /**
     * Register any application services.
     */
    public function register()
    : void{
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{
        ProductSku::observe(ProductSkuObserver::class);
        Paginator::useBootstrapFour();
    }
}
