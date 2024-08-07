<?php

namespace App\Providers;

use App\Repositories\CheckStock\CheckStockRepository;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;
use App\Repositories\Option\OptionRepository;
use App\Repositories\Option\OptionRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CheckStockRepositoryInterface::class, CheckStockRepository::class);
        $this->app->bind(OptionRepositoryInterface::class, OptionRepository::class);
    }
}
