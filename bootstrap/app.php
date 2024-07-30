<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        using: function () {
            $systemRoutes = [
                'category.php',
                'customer.php',
                'product.php'
            ];

            $clientRoutes = [
                'sale.php',
            ];


            foreach ($systemRoutes as $route) {
                Route::middleware('web')
                    ->prefix('admin')
                    ->name('')
                    ->group(base_path("routes/admin/{$route}"));
            }

            foreach ($clientRoutes as $route) {
                Route::middleware('web')
                    ->prefix('')
                    ->group(base_path("routes/sale/{$route}"));
            }
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
