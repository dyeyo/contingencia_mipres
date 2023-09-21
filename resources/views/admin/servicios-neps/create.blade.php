@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Radicado: # 271622256 Documento: CC - 1080670221
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="">Nit IPS</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">CIE 10</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Fecha de ordenamiento</label>
                                <input class="form-control" type="date" name="" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="">Documento profesional</label>
                                <input class="form-control" type="number" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Correo afiliado</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Telefono del afiliado</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="">Documento profesional</label>
                                <input class="form-control" type="number" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Correo afiliado</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Telefono del afiliado</label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <button class="btn btn-success">Agregar detalle</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Registro de Servicios
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <label for="">Codigo Mappiss</label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="">Causal Devolución</label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="">Cantidad Mensual</label>
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <label for=""># meses entregas posfechadas</label>
                                    <input class="form-control" type="number" name="" id="">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="">Cambio Tipo de Documento &nbsp; &nbsp; &nbsp; </label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="">Cambio Número de Documento</label>
                                    <input class="form-control" type="text" name="" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="">Observación</label>
                                    <textarea class="form-control" name="" id=""></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success btn-block">Agregar servicio</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
