<?php

namespace MegaSalud\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }

        // if(\Auth::user()->tipo_usuario == 'Administrador'){
        //     return redirect()->route('admin/inicio');
        // }elseif(\Auth::user()->tipo_usuario == 'Medico'){
        //     return redirect()->route('medico');
        // }

        return $next($request);
    }
}
