<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class RateLimitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next, $key, $limit, $expiresIn)
    {
        $rateLimitKey = 'rate_limit:' . $key;

        if (Cache::has($rateLimitKey)) {
            return response()->json(['error' => 'Too many submissions. Please try again later.'], Response::HTTP_TOO_MANY_REQUESTS);
        }

        Cache::put($rateLimitKey, true, $expiresIn);

        return $next($request);
    }
}

