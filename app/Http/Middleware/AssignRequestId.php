<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssignRequestId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requestID = $request->headers->get('X-Request-ID');

        if(!$requestID) {
            $requestId = Str::uuid()->toString();

            $request->headers->set('X-Request-ID', $requestId);
        }

        // $requestId = Str::uuid()->toString();

        // $request->headers->set('X-Request-ID', $requestId);

        $response = $next($request);

        $response->headers->set('X-Request-ID', $requestId);

        return $response;
    }
}
