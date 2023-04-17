<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    protected $table = 'tb_lugares';
    protected $primarikey = 'id_lugar';
    protected $fillable = [
        'nombre',
        'direccion',
        'id_estado',
        'id_municipio',
        'id_sensor'

    ];
}
