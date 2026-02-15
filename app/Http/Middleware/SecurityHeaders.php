<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
     public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set(
            'Cross-Origin-Opener-Policy',
            'same-origin'
        );

        return $response;
    }
}
