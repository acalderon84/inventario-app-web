<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CompraProduto extends Pivot
{
    protected $table = 'compra_producto';
    protected $fillable =
    [
        'compra_id',
        'producto_id',
        'cantidad',
        'precio_compra',
        'precio_venta',
        'total_compra'
    ];
}
