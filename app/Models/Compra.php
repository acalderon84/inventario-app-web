<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
   protected $table  = 'compras';
   protected $fillable =
   [
    'proveedor_id',
    'user_id',
    'fecha',
    'monto',
       ];
}
