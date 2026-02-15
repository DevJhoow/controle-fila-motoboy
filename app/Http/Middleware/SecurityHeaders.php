<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
        public function handle(Request $request, Closure $next): Response
       {
        $response = $next($request);

        // COOP
        $response->headers->set(
            'Cross-Origin-Opener-Policy',
            'same-origin'
        );

        // Clickjacking
        $response->headers->set(
            'X-Frame-Options',
            'DENY'
        );

        // CSP (UMA LINHA SÓ)
        $response->headers->set(
            'Content-Security-Policy',
            "default-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net; script-src 'self' https://cdn.jsdelivr.net; frame-ancestors 'none';"
        );

        return $response;
    }
}
