<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //
    protected $fillable = [
        'monto', 'concepto', 'tipo'
    ];
    protected $guarded = ['id'];
}
