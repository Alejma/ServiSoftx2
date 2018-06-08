@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Roles

                    @can('roles.create')
                    <a href="{{ route('roles.create')}}" class="btn btn-sm btn-primary pull-right">
                        Agregar
                    </a>
                    @endcan
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                            
                                <th>Role</th>
                               
                                <th colspan="3">//</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name}}</td>
                                <td>{{ $role->slug}}</td>
                                <td>{{ $role->description}}</td>

                                <td>
                                    @can('roles.show')
                                    <a href="{{ route('roles.show', $role->id)}}"
                                     class="btn btn-sm btn-default">
                                     Ver    
                                        </a>
                                    @endcan
                                    </td>
                                    <td>
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id)}}"
                                     class="btn btn-sm btn-default">
                                     Editar   
                                        </a>
                                    @endcan
                                    </td>
                                   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render()}}
                    
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection