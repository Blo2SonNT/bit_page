<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class administracion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth::user()->id_perfil == '1' || auth::user()->id_perfil == '2'){
            return $next($request);//si es admin redirige al administrador de contenido
        }else{
            return redirect('user');//si no es admin lo redirige a la vista de usuario
        }
    }
}
