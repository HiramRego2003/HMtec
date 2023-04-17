<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    use HasFactory;
    protected $table = 'tb_dispositivos';
    protected $primarikey = 'id_dispositivo';
    protected $fillable = [
        'nombre',
        'id_lugar'
    ];
}
