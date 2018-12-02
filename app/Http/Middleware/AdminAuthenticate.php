<?php

namespace App\Http\Middleware;


use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;

class AdminAuthenticate extends Middleware
{


    protected $guards =['admin'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = $this->guards;

        $this->authenticate($request, $guards);

        return $next($request);

    }

    protected function redirectTo($request)
    {

        if (! $request->expectsJson()) {

            return route('admin.login');
        }

    }


}
