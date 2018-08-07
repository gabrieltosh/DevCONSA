<?php

namespace App\Http\Middleware;

use Closure;

class gerente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->tipo != "gerente")
        {
            return redirect()->route('panel');
        }
        return $next($request);
    }
}
