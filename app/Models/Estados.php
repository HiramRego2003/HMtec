<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;
    protected $table = 'tb_estados';
    protected $primarykey = 'id_estado';
    protected $fillable = [
        'nombre'
    ];
}
