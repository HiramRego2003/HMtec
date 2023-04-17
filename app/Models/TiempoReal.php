<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiempoReal extends Model
{
    use HasFactory;
    protected $table = 'tb_tiempo_real';
    protected $primarikey = 'idt_real';
    protected $fillable = [
        'id_sensor',
        'medicion'
    ];
}
