<?php

namespace App\Http\Middleware;

use Closure;

class Penyetor
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
        if(auth()->user()->is_pengepul == "Penyetor")
        {
            return $next($request);
           
        }
        return redirect('/home');
    }
}
