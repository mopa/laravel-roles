@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                  @if ( count($user->rol->departamentos) > 1 )
                    Departamentos: 
                      @foreach ( $user->rol->departamentos as $departamento )
                        {{ $departamento->name }},
                      @endforeach
                  @else

                  Departamento:
                    @foreach ( $user->rol->departamentos as $departamento )
                      {{ $departamento->name }}
                    @endforeach

                  @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hola {{ $user->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
