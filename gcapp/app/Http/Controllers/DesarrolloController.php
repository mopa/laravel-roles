<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DesarrolloController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $user = Auth::user();

      return view('departamentos.desarrollo', compact('user'));
    }
}
