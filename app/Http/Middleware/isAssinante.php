<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAssinante
{
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::user() && \Auth::user()->role === 1) {
            return $next($request);
        } else {
            return response()->view('welcome');
        }
    }
}
