<div class="form-group">
    <label for="monto" class="col-lg-3 control-label requerido">Monto</label>
    <div class="col-lg-8">
        <input type="number" placeholder="Ingrese un monto y separe los decimales con ," step="0.01" min="0"
            name="monto" id="monto" class="form-control" value="{{old('monto', $data->monto ?? '')}}" required />
    </div>
    <label for="concepto" class="col-lg-3 control-label requerido">Concepto</label>
    <div class="col-lg-8">
        <input type="text" name="concepto" placeholder="Ingrese el concepto de la operación a registrar" id="concepto"
            class="form-control" value="{{old('concepto', $data->concepto ?? '')}}" required />
    </div>
    <label for="tipo" class="col-lg-3 control-label requerido">Tipo de operación</label>
    <div class="col-lg-8">
        <select class="form-control" id="tipo" name="tipo" required>
            <option value="Ingreso" {{old('tipo', $data->tipo ?? '') == 'Ingreso' ? 'selected' : '' }}>
                Ingreso
            </option>
            <option value="Egreso" {{old('tipo', $data->tipo ?? '') == 'Egreso' ? 'selected' : '' }}>
                Egreso
            </option>
        </select>
    </div>
</div>