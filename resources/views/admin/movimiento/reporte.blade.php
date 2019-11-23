@extends("theme.$theme.layout")
@section('titulo')
Roles
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Roles</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('registrar_movimiento')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Monto</th>
                            <th>Concepto</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->monto}}</td>
                            <td>{{$data->concepto}}</td>
                            <td>{{$data->tipo}}</td>
                            <td>
                                <a href="{{route('editar_movimiento', ['id' => $data->id])}}"
                                    class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @if ($data->tipo == 'Ingreso')
                        @php
                        $total ?? ''+=$data->monto;
                        @endphp

                        Total : {{$sum ?? ''}}
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Ingresos</th>
                            <th>Egresos</th>
                            <th>Total General</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->monto}}</td>
                            <td>{{$data->concepto}}</td>
                            <td>{{$data->tipo}}</td>
                            <td>
                                <a href="{{route('editar_movimiento', ['id' => $data->id])}}"
                                    class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection