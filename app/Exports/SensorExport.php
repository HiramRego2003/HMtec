<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Sensor;


class SensorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        return Sensor::all();
    }

    public function headings(): array{
        return [
            'id_sensor',
                'nombre',
                'status',
        ];
    }
}
