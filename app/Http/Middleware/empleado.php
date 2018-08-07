<?php

namespace App\Http\Middleware;

use Closure;

class empleado
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
        if(Auth::user()->tipo != "empleado")
        {
            return redirect()->route('panel');
        }
        return $next($request);
    }
}
