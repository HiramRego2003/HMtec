<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSensores extends Model
{
    use HasFactory;
    protected $table = 'tb_tipo';
    protected $primarikey ='idt_sensor';
    protected $fillable = [
        'nombre'
    ];
}
