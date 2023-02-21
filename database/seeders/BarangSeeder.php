<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("barangs")->insert([
            [
                "nama_barang" => "kursi",
                "jurusan" => "TF",
                "stok_barang" => "4",
                "harga" => "250.000"
            ],
            [
                "nama_barang" => "meja",
                "jurusan" => "TF",
                "stok_barang" => "2",
                "harga" => "700.000"
            ],
            [
                "nama_barang" => "Poster",
                "jurusan" => "Animasi",
                "stok_barang" => "4",
                "harga" => "35.000"
            ],
            [
                "nama_barang" => "IOT",
                "jurusan" => "PPLG",
                "stok_barang" => "4",
                "harga" => "500.000"
            ],
        ]);
    }
}
