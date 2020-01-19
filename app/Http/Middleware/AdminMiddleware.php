<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if( !$roles->contains('ADMIN')){
            return redirect()->route('unauthorized')->with('unauthorized',"Only Admin is authorized");
        }
        return $next($request);
    }
}
