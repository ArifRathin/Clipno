<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Auth\Middleware\Auth;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->Role->id==1) {

            return redirect('/admin/index');

        }elseif(Auth::guard($guard)->check() && Auth::user()->Role->id==2){

            return redirect('/author/index');
            
        }elseif(Auth::guard($guard)->check() && Auth::user()->Role->id==3){

            return redirect('/user/index');
            
        }else{
            return $next($request);  
        }
    }
}


