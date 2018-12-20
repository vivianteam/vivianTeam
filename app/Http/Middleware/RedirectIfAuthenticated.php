<?php

namespace App\Http\Middleware;

use Closure;
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
    public function handle($request, Closure $next)
    {
        if(Auth()::check())
        {
            $user=Auth::user();
            if($user->id_type==2 || $user->id_type==3)
                return $next($request);
            else
                return redirect('loginAdmin');
        }
        else
            return redirect('loginAdmin');
    }
}
