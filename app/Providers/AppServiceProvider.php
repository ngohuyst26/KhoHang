<?php

namespace App\Providers;

use App\Models\ProductSku;
use App\Models\TikTokProductLink;
use App\Observers\ProductSkuObserver;
use App\Observers\TikTokProductLinkObserver;
use App\Services\OpenIdService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{

    /**
     * Register any application services.
     */
    public function register()
    : void{
        $this->app->singleton(OpenIdService::class, function ($app){
            return new OpenIdService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    : void{
        TikTokProductLink::observe(TikTokProductLinkObserver::class);
        ProductSku::observe(ProductSkuObserver::class);
        Paginator::useBootstrapFour();
    }
}
