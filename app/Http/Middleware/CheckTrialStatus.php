<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTrialStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $plan): Response
    {
        $tenant = tenant();

        if ($tenant->isOnTrial()) {
            return $next($request);
        }

        if ($tenant->plan === 'premium') {
            return $next($request);
        }

        return response()->json([
            'status'  => Response::HTTP_FORBIDDEN,
            'message' => "Gói dùng thử của bạn đã hết hạn. Vui lòng nâng cấp.",
        ],Response::HTTP_FORBIDDEN);
    }
}
