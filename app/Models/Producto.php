<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //filable
    protected $fillable = ['codigo', 'nombre', 'caracteristica', 'marca', 'stock_inicial', 'proyecto', 'lugar'];

    //relacion uno a muchos
    public function ingresos()
    {
        return $this->hasMany(Ingreso::class);
    }

    public function egresos()
    {
        return $this->hasMany(Egreso::class);
    }
}
