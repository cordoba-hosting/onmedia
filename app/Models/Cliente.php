<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['nombre', 'apellido', 'cuit', 'email', 'email_2', 'email_3', 'tel_1', 'tel_2', 'tel_3','comentarios'];
}

