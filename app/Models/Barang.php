<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barangs";

    protected $fillable = [
        "nama_barang",
        "foto_barang",
        "deskripsi_barang",
        "stok_barang",
        "foto_barang"
    ];


    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }

}
