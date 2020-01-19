<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {

        // $roles = $request->user()->roles->pluck('role');
        // switch ($role) {
        //     case 'SUPER_ADMIN':
        //         if( !$roles->contains("SUPER_ADMIN")){
        //             return redirect()->route('unauthorized')->with('unauthorized',"Unauthorized action");
        //         }
        //         break;
        //     case 'ADMIN':
        //         if( !$roles->contains("ADMIN")){
        //             return redirect()->route('unauthorized')->with('unauthorized',"Only Admin is authorized");
        //         }
        //         break;
        //     case 'EC':
        //         if( !$roles->contains("EC")){
        //             return redirect()->route('unauthorized')->with('unauthorized',"Only EC is authorized");
        //         }
        //         break;
        // }




        if ( !$request->user()->hasRole($role)) {
            return redirect()->route('unauthorized')->with('unauthorized',"Unauthorized action");
        }
        return $next($request);
    }
}
