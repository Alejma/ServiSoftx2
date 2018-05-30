@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Editando el usuario</h1>
                </div>

                <div class="panel-body">
                	{!! Form::model($user, ['route' => ['users.update', $user->id],
                	'method' => 'PUT']) !!}

                    @include('users.partials.form')

                	{!! Form::close() !!}

                   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection