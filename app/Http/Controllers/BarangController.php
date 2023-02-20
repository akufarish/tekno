<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view("dashboard", [
            "barang" => $barang,
            "title" => "dashboard"
        ]);
    }

    public function show(Barang $barang)
    {
        return view("barang", [
            "barang" => $barang,
            "title" => "Barang"
        ]);
    }

    public function barang()
    {
        $barang = Barang::all();
        return view("barang", [
            "barang" => $barang,
            "title" => "Barang"
        ]);
    }

    public function page()
    {
        return view("tambah", [
            "title" => "tambah barang"
        ]);
    }

    public function tambah(Request $request)
    {

        DB::table('barangs')->insert([
            "nama_barang" => $request->nama_barang,
            "foto_barang" => $request->foto_barang,
            "deskripsi_barang" => $request->deskripsi_barang,
            "stok_barang" => $request->stok_barang,
            "harga" => $request->harga,
        ]);
        
        return redirect("/barang")->with("success", "berhasil");
    }

    public function edit($id)
    {
        $barang = DB::table("barangs")->where("id", $id)->get();

        return view("ubah", [
            "barang" => $barang,
            "title" => "update"
        ]);
    }

    public function update(Request $request)
    {
        DB::table('barangs')->where("id", $request->id)->update([
            "nama_barang" => $request->nama_barang,
            "foto_barang" => $request->foto_barang,
            "deskripsi_barang" => $request->deskripsi_barang,
            "stok_barang" => $request->stok_barang,
            "harga" => $request->harga,
        ]);

        return redirect("/barang");
    }


    public function delete(Barang $barang)
    {
        $barang->delete();

        return redirect("/barang");
    }
}
