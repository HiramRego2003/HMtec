<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUsuarios extends Model
{
    use HasFactory;
    protected $table = 'tb_tipos';
    protected $primarykey = 'idt_usuario';
    protected $fillable = [
        'nombre',
    ];
}
