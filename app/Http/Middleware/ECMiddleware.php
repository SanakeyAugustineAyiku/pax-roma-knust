<?php

namespace App\Http\Middleware;

use Closure;

class ECMiddleware
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
        $roles = $request->user()->roles->pluck('role');
        if( !$roles->contains('EC')){
            return redirect()->route('unauthorized')->with('unauthorized',"Only EC is authorized");
        }
        return $next($request);
    }
}
