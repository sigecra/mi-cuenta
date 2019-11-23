@extends("theme.$theme.layout")
@section('titulo')
Reporte Movimientos
@endsection

@section("styles");
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
@endsection


@section("scripts")

<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}" type="text/javascript">
</script>
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js" type="text/javascript"></script>

<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
    $('#tabla-data').DataTable( {
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    } ),
    $('#tabla-data2').DataTable( {
        "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Reporte de Movimientos</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('registrar_movimiento')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                    </a>
                </div>
            </div>

            <div class="card-body">


                <form action="{{route('reporte')}}" id="form-general" class="form-horizontal" method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <span>Seleccione una fecha o periodo para consultar las operaciones registradas en el sistema.
                        </span>
                        @include('admin.movimiento.formreporte')
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-info">Consultar</button>
                        </div>
                    </div>
                </form>


                <table class="table table-striped table-bordered table-hover" id="tabla-data2">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Monto</th>
                            <th>Concepto</th>
                            <th>Tipo</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->monto}}</td>
                            <td>{{$data->concepto}}</td>
                            <td>{{$data->tipo}}</td>
                            <td>{{$data->created_at->format('d-m-Y')}}</td>
                            <td>
                                <a href="{{route('editar_movimiento', ['id' => $data->id])}}"
                                    class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>
                                <form action="{{route('eliminar_movimiento', ['id' => $data->id])}}"
                                    class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                        title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Ingresos</th>
                            <th>Egresos</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$ingresos}}</td>
                            <td>{{$egresos}}</td>
                            <td>{{$subtotal}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection