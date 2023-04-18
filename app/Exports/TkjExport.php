<?php

namespace App\Exports;

use App\Models\Barang;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class TkjExport implements FromCollection, WithHeadings, WithTitle
{

    use Exportable;

    public function title(): string
    {
        return "TJKT";
    }

    public function headings(): array
    {
        return [
            "no",
            "nama_barang",
            "qty",
            "satuan",
            "harga_modal",
            "harga_modal",
            "harga_jual",
            "laba",
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
    }
}
