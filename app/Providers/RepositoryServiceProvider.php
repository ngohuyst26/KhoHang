<?php

namespace App\Providers;

use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\CheckStock\CheckStockRepository;
use App\Repositories\CheckStock\CheckStockRepositoryInterface;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Repositories\Department\DepartmentRepository;
use App\Repositories\Department\DepartmentRepositoryInterface;
use App\Repositories\ImportGoods\ImportGoodsRepository;
use App\Repositories\ImportGoods\ImportGoodsRepositoryInterface;
use App\Repositories\JobTitle\JobTitleRepository;
use App\Repositories\JobTitle\JobTitleRepositoryInterface;
use App\Repositories\Option\OptionRepository;
use App\Repositories\Option\OptionRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Staff\StaffRepository;
use App\Repositories\Staff\StaffRepositoryInterface;
use App\Repositories\Supplier\SupplierRepository;
use App\Repositories\Supplier\SupplierRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{

    public function register()
    : void{
        $this->app->bind(ImportGoodsRepositoryInterface::class, ImportGoodsRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CheckStockRepositoryInterface::class, CheckStockRepository::class);
        $this->app->bind(OptionRepositoryInterface::class, OptionRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(SupplierRepositoryInterface::class, SupplierRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepository::class);
        $this->app->bind(JobTitleRepositoryInterface::class, JobTitleRepository::class);
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
        $this->app->bind(StaffRepositoryInterface::class, StaffRepository::class);
    }
}
