<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
class Authenticate extends Middleware
{
    /**
     * @var array
     */
    protected $guards = [];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string[] ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->guards = $guards;
        return parent::handle($request, $next, ...$guards);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }

        if (! $request->expectsJson()) {

            if ($this->guards[0] === 'admins') {
                return route('admin.login');
            }else if ($this->guards[0] === 'voters') {
                return route('elections.voter.login');
            }else if ($this->guards[0] === 'ec') {
                return route('ec.login');
            }else if ($this->guards[0] === "web"){
                return route('user.login');
            }
        }
    }
}
