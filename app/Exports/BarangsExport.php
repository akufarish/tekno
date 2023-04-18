<?php

namespace App\Exports;

use App\Models\Barang;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\TkjExport;

class BarangsExport implements WithMultipleSheets
{

    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function sheets(): array
    {
        $sheets = [
            "TJKT" => new TkjExport(),
            "ANM" => new TkjExport(),
            "DI" => new TkjExport(),
        ];

        return $sheets;
    }
}
