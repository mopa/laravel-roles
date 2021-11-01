@extends('layouts.app')
@section('title', 'Ventas')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-header"> 
                  Departamento: <strong>Ventas</strong>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hola {{ $user->name }}!

                    

                    <table class="table mt-4">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Departamentos</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $user->email }}</th>
                        <td>{{ $user->rol->name }}</td>
                        <td>
                          @foreach ( $user->rol->departamentos as $departamento )
                            <ul class="list-unstyled">
                              <li>
                                <a href="/{{ $departamento->name }}"
                                  class="btn btn-outline-primary btn-block text-capitalize">{{ $departamento->name }}</a>
                              </li>
                            </ul>
                          @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
