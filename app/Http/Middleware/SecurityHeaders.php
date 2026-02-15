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

            // CSP + Trusted Types (resolve XSS DOM)
            $response->headers->set(
                'Content-Security-Policy',
                "default-src 'self';
                script-src 'self' https://cdn.jsdelivr.net;
                style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net;
                img-src 'self' data:;
                font-src 'self' https://cdn.jsdelivr.net;
                connect-src 'self';
                frame-ancestors 'none';
                base-uri 'self';
                form-action 'self';
                require-trusted-types-for 'script';"
            );

            //  Proteções extras (boa prática)
            $response->headers->set('X-Frame-Options', 'DENY');
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

            return $response;
        }
}
