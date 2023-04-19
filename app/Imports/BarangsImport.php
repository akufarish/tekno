<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Imports\SheetPertama;
use App\Imports\SheetKedua;
use App\Imports\SheetKetiga;
use App\Imports\SheetKempat;
use App\Imports\SheetKelima;

class BarangsImport implements WithCalculatedFormulas, WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            "TJKT" => new SheetPertama(),
            "DI" => new SheetKedua(),
            "TF" => new SheetKetiga(),
            "ANM" => new SheetKempat(),
            "KI" => new SheetKelima(),
            "DKV" => new SheetKeenam(),
        ];
    }

}
