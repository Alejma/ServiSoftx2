@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Especificaciones del role</h1>
                </div>

                <div class="panel-body">
                    
                    <p><strong>Nombre: </strong>{{ $role->name}}</p>
                    <p><strong>Slug: </strong>{{ $role->slug}}</p>
                    <p><strong>Descripcion: </strong>{{ $role->description}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection