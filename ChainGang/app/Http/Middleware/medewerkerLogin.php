<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class medewerkerLogin
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


        try {
            if (Auth::guard('admin')->user() !== null) {
                if(Auth::guard('admin')->user()->exists === true) {
                    return $next($request);
                } else {
//                    return redirect()->route('admin.login');
                }
            } else {
//                return redirect()->route('admin.login');
            }
        } catch (Exception $e) {
//            return redirect()->route('admin.login');
        }
//        if (Auth::guard('admin')->user() === null){
//            return redirect('/admin/login');
//        }
//
////        dd('lll');
//        return $next($request);


    }

//    public function handle($request, Closure $next)
//    {
//        dd(Auth::guard('admin'));
//        try {
//            if (Auth::guard('admin')->user() !== null) {
//                if(Auth::guard('admin')->user()->exists === true) {
//                    return $next($request);
//                } else {
//                    return redirect()->route('admin.login');
//                }
//            } else {
//                return redirect()->route('admin.login');
//            }
//        } catch (Exception $e) {
//            return redirect()->route('admin.login');
//        }
//    }
}
