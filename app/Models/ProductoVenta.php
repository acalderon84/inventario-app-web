<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductoVenta extends Pivot
{
    use HasFactory;
   protected $table  = 'producto_venta';
   protected $fillable =
   [
    'producto_id',
    'venta_id',
    'cantidad',
    'precio_unitario',
    'subtotal',
    
   ];
    //
}
