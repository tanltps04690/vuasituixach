<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Login
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
        // var_dump(Auth::check());
        // var_dump(Auth::user());die();
        if(Auth::check() && Auth::user()->role===1)
        return $next($request);
        else
        return redirect('/');
    }
}
