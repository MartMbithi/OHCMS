<?php

namespace Akaunting\SignedUrl\Middleware;

use Closure;

class ValidateSignedUrl
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $urlIsSigned = app('signed-url')->validate($request->fullUrl());

        if (! $urlIsSigned) {
            abort(403);
        }

        return $next($request);
    }
}
