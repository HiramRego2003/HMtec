<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Usuarios;


class UsuariosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Usuarios::all();
    }

    public function headings(): array{
        return [
        'id_usuario',
        'nombre',
        'app',
        'ap',
        'fn',
        'gen',
        'foto',
        'email',
        'pass',
        ];
    }


}
