<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;

class VerifyTenantToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tenantIdFromToken = JWTAuth::parseToken()->getClaim('tenant_id');
        $currentTenantId = tenant('id');

        if ($tenantIdFromToken !== $currentTenantId) {
            return response()->json(['error' => 'Unauthorized tenant access'], 403);
        }
        return $next($request);
    }
}
