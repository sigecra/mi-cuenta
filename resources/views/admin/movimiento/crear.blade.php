@extends("theme.$theme.layout")
@section('titulo')
Movimientos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-danger">
            <div class="card-header with-border">
                <h3 class="card-title">Registrar Movimientos</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('movimiento')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('guardar_movimiento')}}" id="form-general" class="form-horizontal" method="POST"
                autocomplete="off">
                @csrf

                <div class="card-body">
                    <p> Registre sus ingresos o egresos en el siguiente formulario </p>

                    @include('admin.movimiento.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection