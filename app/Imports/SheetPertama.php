<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SheetPertama implements ToModel, WithHeadingRow, WithCalculatedFormulas, SkipsEmptyRows
{
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
            "harga_jual" => $row["harga_jual"],
            "laba" => $row["laba"],
        ]);
    }
}
