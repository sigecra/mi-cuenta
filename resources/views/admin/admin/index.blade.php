@extends("theme.$theme.layout")
@section("titulo")
Administrador
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">Bienvenidos</div>
</div>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Hoy</h3>

                <p>Registrar movimientos</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('registrar_movimiento')}}" class="small-box-footer">Haga click aquí <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Reportes<sup style="font-size: 20px">%</sup></h3>
                <p>Operaciones</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('reporte')}}" class="small-box-footer">Haga click aquí <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endsection