<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    use HasFactory;
    //fillable


    protected $fillable = ['producto_id', 'empleado_id', 'cantidad', 'fecha'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
    
}
