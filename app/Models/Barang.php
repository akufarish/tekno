<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_barang",
        "foto_barang",
        "deskripsi_barang",
        "stok_barang",
        "foto_barang"
    ];
}
