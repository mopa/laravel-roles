@extends('layouts.app')
@section('title', 'Usuarios')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    @foreach ($users as $user)
                    <ul>
                      <li>{{ $user->name }}</li>
                        <ul>
                          <li>{{ $user->email }}</li>
                          <li>Rol: {{ $user->rol->name }}</li>
                          <li>Departamento: 
                            @foreach ( $user->rol->departamentos as $departamento )
                              {{ $departamento->name }}
                            @endforeach
                          </li>
                        </ul>
                    </ul>
                    

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
