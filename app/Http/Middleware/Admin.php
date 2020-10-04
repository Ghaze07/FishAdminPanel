<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class Admin
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
        
        //dd(Auth::User()->role);
        if(Auth::check() && Auth::User()->role=="admin"){

        return $next($request);

        }

        return redirect('/');
    }
}
