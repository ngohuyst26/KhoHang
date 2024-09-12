<?php

use App\Http\Middleware\Cors;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
                  ->withRouting(
                      web: __DIR__ . '/../routes/web.php',
                      api: __DIR__ . '/../routes/api.php',
                      commands: __DIR__ . '/../routes/console.php',
                      health: '/up',
                      using: function (){
                          $systemRoutes = [
                              'category.php',
                              'checkstock.php',
                              'customer.php',
                              'option.php',
                              'export.php',
                              'order.php',
                              'product.php',
                              'supplier.php'
                          ];

                          $clientRoutes = [
                              'order.php',
                              'customer.php',
                              'sale.php',
                          ];

                          $authRoutes = [
                              'auth.php',
                              'web.php'
                          ];


                          foreach ($systemRoutes as $route){
                              Route::middleware('web')
                                   ->prefix('admin')
                                   ->name('')
                                   ->group(base_path("routes/admin/{$route}"));
                          }

                          foreach ($clientRoutes as $route){
                              Route::middleware(['web', 'auth'])
                                   ->prefix('')
                                   ->name('sale.')
                                   ->group(base_path("routes/sale/{$route}"));
                          }

                          foreach ($authRoutes as $route){
                              Route::middleware('web')
                                   ->prefix('')
                                   ->group(base_path("routes/{$route}"));
                          }
                          Route::middleware('api')
                               ->prefix('api')
                               ->group(base_path("routes/api.php"));
                      },
                  )
                  ->withMiddleware(function (Middleware $middleware){
                      $middleware->append(Cors::class);
                  })
                  ->withExceptions(function (Exceptions $exceptions){
                      //
                  })->create();
