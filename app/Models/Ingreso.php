<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = ['producto_id', 'cantidad', 'fecha'];
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
