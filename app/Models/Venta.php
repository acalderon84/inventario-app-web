<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
   protected $table  = 'ventas';
   protected $fillable =
   [
    'cliente_id',
    'monto',
    'fecha',

   ];
   //Relacion de la compra con el cliente
    public function cliente()
    {
     return $this->belongsTo(User::class, 'cliente_id');

    }
    //Relacion de la compra con el vendedor
    public function vendedor()
    {
     return $this->belongsTo(User::class, 'user_id');

    }

}
