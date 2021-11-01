<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**
         * Esta es una forma rapida de hacer el filtrado por rol,
         * para luego seguidamente en los middleware decidir si el
         * usuario tiene el rol requerido darle paso o redireccionar.
         * 
         * Otra forma mas elaborada es usar los Requests y el Policy, en
         * donde podriamos definir cada acceso o permisos a acciones 
         * como items.
         */

        if (!Auth::check()) {
          return redirect()->route('login');
        }
  
        if (Auth::user()->rol_id == 1) {
          return redirect()->route('desarrollo');
        }
  
        if (Auth::user()->rol_id == 2) {
          return redirect()->route('ventas');
        }
  
        if (Auth::user()->rol_id == 3) {
          return redirect()->route('direccion'); // Elegimos esta por defecto
        }
  
        if (Auth::user()->rol_id == 4) {
          return redirect()->route('direccion');
        }
    }
}
