<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
    protected $table = 'tb_municipios';
    protected $primarykey = 'id_municipio';
    protected $fillable = [
    'nombre',
    'id_estado'
    ];
}
