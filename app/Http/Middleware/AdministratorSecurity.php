<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Redirect;
use Auth;
class AdministratorSecurity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        // Variable $rol la mandamos desde el controlador de usuarios con el parametro admin para la comparacion de permisos
        // y realizar la comparacion
        if(Auth::guest())
        {
            return Redirect::action('Admin\UsersController@indexPrincipal');
        }
        else
        {
           if(auth()->user()->type === $rol)
            {
                return $next($request);
            } 
            return redirect('/admin');
        }
        
        
    }
}
