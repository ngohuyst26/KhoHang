<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $plan): Response
    {
        if (tenant()->hasPlan($plan)) {
            return $next($request);
        }

        return response()->json([
            'status'  => Response::HTTP_FORBIDDEN,
            'message' => "Hãy nâng cấp gói để thực hiện chức năng này",
            'data'    => ''
        ],Response::HTTP_FORBIDDEN);
    }
}
