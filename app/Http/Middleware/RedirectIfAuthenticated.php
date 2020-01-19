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
            case 'admins':
                if( Auth::guard($guard)->check()){
                    return redirect()->route('admin.home');
                }
                break;

            case 'voters':
                if( Auth::guard($guard)->check()){
                    return redirect()->route('elections.voter.home');
                }
                break;
            case 'ec':
                if( Auth::guard($guard)->check()){
                    return redirect()->route('ec.home');
                }
                break;

            case 'web':
                if( Auth::guard($guard)->check()){
                    return redirect()->route('user.home');
                }
                break;
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
