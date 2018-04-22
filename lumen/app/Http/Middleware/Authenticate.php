<?php

namespace AppHttpMiddleware;

use Closure;
use IlluminateContractsAuthFactory as Auth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var IlluminateContractsAuthFactory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  IlluminateContractsAuthFactory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  IlluminateHttpRequest  $request
     * @param  Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
