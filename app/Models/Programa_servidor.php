<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_servidor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_programa',
        'id_servidor'
    ];
}
