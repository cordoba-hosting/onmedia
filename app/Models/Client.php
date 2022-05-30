<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName', 'cuit', 'email', 'email_2', 'email_3', 'tel_1','tel_2', 'tel_3', 'comments', 'deleted'];

    
}
