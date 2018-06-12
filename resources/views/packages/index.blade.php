@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Paquetes

                    @can('packages.show')
                    <a class="btn btn-sm btn-primary " href="{{route('packages.pdf')}}"> 
                    <i class="fa fa-file-pdf-o"></i> Generar PDF</a>
                    @endcan

                    @can('packages.create')
                    <a href="{{ route('packages.create')}}" class="btn btn-sm btn-primary pull-right">
                        Agregar
                    </a>
                    @endcan
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Peso</th>
                                <th>Estado</th>
                            
                                <th>Nombre remitente</th>
                                <th>N° Documento</th>
                               
                                <th colspan="3">//</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paquetes as $paquete)
                            <tr>
                                <td>{{ $paquete->id }}</td>
                                <td>{{ $paquete->Peso}} kg</td>
                                <td>{{ $paquete->Estado}}</td>
                                <td>{{ $paquete->Nombre_Remitente}}</td>
                                <td>{{ $paquete->NDocumento}}</td>
                                
                                <td>
                                    @can('packages.show')
                                    <a href="{{ route('packages.show', $paquete->id)}}"
                                     class="btn btn-sm btn-default">
                                     Ver    
                                        </a>
                                    @endcan
                                    </td>
                                    <td>
                                    @can('packages.edit')
                                    <a href="{{ route('packages.edit', $paquete->id)}}"
                                     class="btn btn-sm btn-default">
                                     Editar   
                                        </a>
                                    @endcan
                                    </td>
                                   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $paquetes->render()}}
                    
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection