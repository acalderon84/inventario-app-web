<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
   protected $table  = 'productos';
   protected $fillable =
   [
    'proveedor_id',
    'fecha',
    'monto',
       ];
}
