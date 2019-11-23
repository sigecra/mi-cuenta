@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-danger">
            <div class="card-header with-border">
                <h3 class="card-title">Editar Menú</h3>
                <a href="{{route('menu')}}" class="btn btn-info btn-sm pull-right">Listado</a>
            </div>
            <form action="{{route('actualizar_menu', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
