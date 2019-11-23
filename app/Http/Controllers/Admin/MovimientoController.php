<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Movimiento;
use App\Http\Requests\ValidacionMovimiento;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Movimiento::orderBy('id')->get();
        return view('admin.movimiento.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
        return view('admin.movimiento.crear');
    }

    /*  public function crearreporte()
    {
        //
        //    return view('admin.movimiento.estadistica');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionMovimiento $request)
    {
        //
        Movimiento::create($request->all());
        return redirect('admin/movimiento')->with('mensaje', 'Registro creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //        
        $data = Movimiento::findOrFail($id);
        return view('admin.movimiento.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionMovimiento $request, $id)
    {
        //
        Movimiento::findOrFail($id)->update($request->all());
        return redirect('admin/movimiento')->with('mensaje', 'Registro actualizado con exito');
    }

    public function reporte(Request $request)
    {
        $datas = Movimiento::whereBetween('created_at', array($request->desde, $request->hasta))
            ->get();
        $ingresos = 0;
        $egresos = 0;
        foreach ($datas as $mov) {
            //  dd($mov->tipo);
            if ($mov->tipo == 'Ingreso') {
                $ingresos += $mov->monto;
            } else {
                $egresos += $mov->monto;
            }
        }
        //  echo $ingresos . ' - ' . $egresos;
        $subtotal = $ingresos - $egresos;
        return view('admin.movimiento.reportefinal', compact('datas', 'ingresos', 'egresos', 'subtotal'));
        //  Movimiento::findOrFail($id)->update($request->all());
        //  return redirect('admin/movimiento')->with('mensaje', 'Registro actualizado con exito');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
