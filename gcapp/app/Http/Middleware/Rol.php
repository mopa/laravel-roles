<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $rol)
    {
        if (!Auth::check()) 
          return redirect('login');

        $user = Auth::user();

        /**********************
         * Una manera de hacer el filtrado es usar el
         * siguiente foreach.
         * 
         * Otra es simplemente comprobar si los roles
         * existen en el array del $rol
         */

        // foreach($rol as $role) { 
        //     if($user->rol_id == $role)
        //         return $next($request);
        // }
        // return redirect('login');

        
        if (! in_array($user->rol_id, $rol)) {
          return redirect('login');
        }
        return $next($request);

        
    }
}
