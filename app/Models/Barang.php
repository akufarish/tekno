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
        "qty",
        "satuan",
        "harga_modal",
        "total_modal",
        "harga_jual",
        "laba"
    ];


    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }

}
