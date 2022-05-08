<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::user() && \Auth::user()->role === 4) {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
