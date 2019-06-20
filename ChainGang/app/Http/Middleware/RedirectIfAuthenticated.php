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
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard('admin')->check()) {
                    //I am an admin
                    //return redirect()->route('cg-admin.products');
                }
                break;
            case 'web':
                if (Auth::guard('web')->check()) {
                    //I am an user
                }
                break;
            //default:
            //if (Auth::guard($guard)->check()) {
            //return redirect('/chain-gang/public');
            //}
            //break;
        }
        return $next($request);
    }
}
