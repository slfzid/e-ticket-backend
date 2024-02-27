<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \closure
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->level,$levels)){
            return  $next($request);
        };
        return redirect('/home');
    }
}
