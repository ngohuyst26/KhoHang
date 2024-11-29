<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPremiumStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tenant = tenant();

        if ($tenant->plan === 'premium' && !$tenant->isSubscriptionExpired()) {
            return $next($request);
        }

        return response()->json([
            'status'  => Response::HTTP_FORBIDDEN,
            'message' => "Gói premium của bạn đã hết hạn. Vui lòng nâng cấp.",
        ],Response::HTTP_FORBIDDEN);
    }
}
