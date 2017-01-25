<?php

namespace MegaSalud\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->user()->isAdmin()) {
            return $next($request);
        }else{
            // dd("No tienes permisos de administrador");
            return redirect()->back()->withErrors(array('message' => 'No tienes permisos para acceder a esta ruta'));
        }
    }
}