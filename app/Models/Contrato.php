<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //use HasFactory;
    protected $table = 'contrato';
    protected $fillable = ['idCliente', 'idServicio', 'fecha_alta', 'fecha_vencimiento', 'dominio', 'precio_actual'];
    public function clientes()
    {
        //return $this->hasOne('App\Cliente');
        return $this->belongsTo('App\Models\Cliente'); //->withPivot('idCliente');

    }
}
