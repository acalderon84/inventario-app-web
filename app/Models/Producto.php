<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

   protected $table  = 'productos';
   protected $fillable =
   [
    'nombre',
    'descripcion',
    'existencia',
    'presentacion',
    'proveedor_id',
   ];
   
   //Relaciones de la base de datos
    public function proveedor()
    {
     return $this->belongsTo(Proveedor::class);
    }


public function compras()
{
    return $this -> hasMany(CompraProducto::class);
}
public function ventas()
{
    return $this->hasMany(CompraProducto::class);
}
}
