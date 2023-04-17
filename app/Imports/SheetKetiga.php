<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SheetKetiga implements WithHeadingRow, ToModel, WithCalculatedFormulas, SkipsOnError
{

    use Importable, SkipsErrors;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            "nama_barang" => $row["nama_barang"],
            "qty" => $row["qty"],
            "satuan" => $row["satuan"],
            "harga_modal" => $row["harga_modal"],
            "total_modal" => $row["harga_modal"],
            "harga_jual" => $row["total_jual"],
            "laba" => $row["laba"],
        ]);
    }
}
