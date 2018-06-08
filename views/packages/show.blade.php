@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 align="center">Especificaciones del paquete # {{ $paquete->id}}</h1>
                </div>

                <div class="panel-body">

                    <p><strong>Id: </strong>{{ $paquete->id}}</p>
                    <p><strong>Peso: </strong>{{ $paquete->Peso}}</p>
                    <p><strong>Estado: </strong>{{ $paquete->Estado}}</p>
                    <p><strong>Dirección Remitente: </strong>{{ $paquete->Direccion_Remitente}}</p>
                    <p><strong>Nombre Remitente: </strong>{{ $paquete->Nombre_Remitente}}</p>
                    <p><strong>Número de Documento: </strong>{{ $paquete->NDocumento}}</p>
                    <p><strong>Dirección Remitido: </strong>{{ $paquete->Direccion_Llegada}}</p>
                    <p><strong>Nombre Remitido: </strong>{{ $paquete->Nombre_Remitido }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
