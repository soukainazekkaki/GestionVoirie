<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        //hadi katvérifier si la personne authentifie est un user normal va le redirigé
        //vers login user normal sinon ila kan admin va le redirigé vers login admin...
        if (! $request->expectsJson()) {

            if($request->routeIs('admin.*')){
                return route('admin.login');
            }
            if($request->routeIs('responsable.*')){
                return route('responsable.login');
            }
            return route('user.login');
        }
    }
}
