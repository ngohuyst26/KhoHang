<?php

use App\Http\Middleware\Cors;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Response;
return Application::configure(basePath: dirname(__DIR__))
      ->withRouting(
          web: __DIR__ . '/../routes/web.php',
          api: __DIR__ . '/../routes/api.php',
          commands: __DIR__ . '/../routes/console.php',
          health: '/up',
          using: function (){
              foreach (config('tenancy.central_domains') as $domain) {
                  Route::middleware('api')
                       ->prefix('api')
                       ->domain($domain)
                       ->group(base_path("routes/api.php"));
              }
          },
      )
      ->withMiddleware(function (Middleware $middleware){
          $middleware->append(Cors::class);
          $middleware->alias([
              'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
              'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
              'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
          ]);
      })
      ->withExceptions(function (Exceptions $exceptions){
          $exceptions->render(function (AuthenticationException $e, Request $request) {
              if ($request->is('api/*')) {
                  return response()->json([
                      'message' => $e->getMessage(),
                  ], 401);
              }
          });

          $exceptions->renderable(function (\Spatie\Permission\Exceptions\UnauthorizedException $e, $request) {
              return response()->json([
                  'message' => 'Không có quyền truy cập.',
                  'status'  => Response::HTTP_FORBIDDEN,
              ],Response::HTTP_FORBIDDEN);
          });
      })
      ->create();
