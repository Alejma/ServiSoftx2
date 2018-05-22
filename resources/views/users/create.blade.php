@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Creando paquete</h1>
                </div>

                <div class="panel-body">
                	{!! Form::open(['route' => 'packages.store']) !!}

                    @include ('packages.partials.form')

                	{!! Form::close() !!}

                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection