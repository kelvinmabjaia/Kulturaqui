<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAnunciante
{
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::user() && \Auth::user()->role === 2) {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
