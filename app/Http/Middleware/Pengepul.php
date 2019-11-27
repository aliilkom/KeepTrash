<?php

namespace App\Http\Middleware;

use Closure;

class Pengepul
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
        if(auth()->user()->is_pengepul == "Pengepul")
        {
            return $next($request);
           
        }
        return redirect('/dashboard');
    }
    
    
}
