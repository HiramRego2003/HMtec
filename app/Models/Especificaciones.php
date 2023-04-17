<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificaciones extends Model
{
    use HasFactory;
    protected $table = 'tb_especificaciones';
    protected $primarikey = 'id_espe';
    protected $fillable = [
        'nivel_co2',
        'nivel_luz',
        'nivel_temp'
    ];
}
