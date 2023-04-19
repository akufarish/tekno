<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("nama_barang")->nullable();
            $table->string("tanggal")->nullable();
            $table->string("qty")->nullable();
            $table->string("satuan")->nullable();
            $table->string("harga_modal")->nullable();
            $table->string("total_modal")->nullable();
            $table->string("harga_jual")->nullable();
            $table->string("laba")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
