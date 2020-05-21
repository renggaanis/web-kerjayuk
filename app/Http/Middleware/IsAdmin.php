<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsAdmin
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
        if(auth()->user()->admin == 1){
            return $next($request);
        }
        if (auth()->user()->admin == 0) {
            return $next($request);
        }
        if (auth()->user()->admin == 2) {
            return $next($request);
        }
   
        return redirect('home');
      
    }
}
