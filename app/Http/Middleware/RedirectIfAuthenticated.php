<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if($guard === 'admin'){
                    return redirect()->route('admin.home');
                }
                if($guard === 'responsable'){
                    return redirect()->route('responsable.home');
                }
         //ceci va rediriger un user athentifié vers une route d'accueil spécifique
         //cad par la vérification de user wash normal wla admin okatsséfto l page 
    //li 3ndo relation biha à travers la vérification de guard(type de personne authentifié)
                // return redirect(RouteServiceProvider::HOME);
            //on chage ça par ça :
            //c'est la nouvelle route de page d'accueil de user normal
            return redirect()->route('user.home');
            }
        }

        return $next($request);
    }
}
