@extends('layouts.app')

@section('content')

<hr>
<hr>

<a>Inventario de paquetes</a>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Peso</th>
                                <th>Estado</th>
                                <th>Nombre remitente</th>
                                <th>N° Documento</th>
                                <th>Direccion de llegada</th>
                                <th>Nombre remitido</th>
                               

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
                                <td>{{ $paquete->Direccion_Llegada}}</td>
                                <td>{{ $paquete->Nombre_Remitido }}</td>

                                
                                   
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

@endsection