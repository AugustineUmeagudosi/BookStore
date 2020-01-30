<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class User
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }elseif (Auth::user()->role == 3) {
            return redirect()->route('user');
        }else{
            return redirect()->back();
        }
        return $next($request);
    }
}
