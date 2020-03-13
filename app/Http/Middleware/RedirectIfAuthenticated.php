<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            if(Auth::user()->role == "admin") {
                return redirect(RouteServiceProvider::HOME);
            } elseif(Auth::user()->role == "sales") {
                return redirect(RouteServiceProvider::HOME);
            } else {
                return redirect()->route('home');
            }
        }

        return $next($request);
    }
}
