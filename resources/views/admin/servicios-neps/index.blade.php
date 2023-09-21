@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Radicado: # 271622256 Documento: CC - 1080670221
                </div>
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Asignar</th>
                                <th># Radicado</th>
                                <th>Estado</th>
                                <th>observación</th>
                                <th>Tipo Id</th>
                                <th>Numero id Afiliado</th>
                                <th>Nit IPS</th>
                                <th>Fecha ordenamiento</th>
                                <th>Dx principal</th>
                                <th>FEcha ceración</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>
                                        <a href="{{ route('servicios-neps-crear') }}">Asignar</a>
                                    </td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->id}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Asignar</th>
                                <th># Radicado</th>
                                <th>Estado</th>
                                <th>observación</th>
                                <th>Tipo Id</th>
                                <th>Numero id Afiliado</th>
                                <th>Nit IPS</th>
                                <th>Fecha ordenamiento</th>
                                <th>Dx principal</th>
                                <th>FEcha ceración</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            new DataTable('#example');
        });
    </script>
@endsection
