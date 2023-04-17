<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $table = 'tb_sensor';
    protected $primarikey = 'id_sensor';
    protected $fillable = [
        'nombre',
        'status',
    ];
}
