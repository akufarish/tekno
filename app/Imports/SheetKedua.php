<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Arabic;

class SheetKedua implements WithHeadingRow, ToModel, WithCalculatedFormulas, SkipsOnError
{   

    use Importable, SkipsErrors;

        /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {

        if(!array_filter($row)) {
            return null;
         } 

        return new Barang([
            "nama_barang" => $row["nama_barang"],
            "qty" => $row["qty"],
            "satuan" => $row["satuan"],
            "harga_modal" => $row["harga_modal"],
            "total_modal" => $row["harga_modal"],
            "harga_jual" => $row["harga_jual"],
            "laba" => $row["laba"],
        ]);
    }
}
