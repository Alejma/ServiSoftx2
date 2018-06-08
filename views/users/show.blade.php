@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Especificaciones del usuario # {{ $user->id}}</h1>
                </div>

                <div class="panel-body">

                    <p><strong>Id: </strong>{{ $user->id}}</p>
                    <p><strong>Nombre: </strong>{{ $user->name}}</p>
                    <p><strong>Correo electronico: </strong>{{ $user->email}}</p>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
