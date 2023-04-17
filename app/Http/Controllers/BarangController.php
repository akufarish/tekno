<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Exports\BarangsExport;
use App\Imports\BarangImport;
use App\Imports\BarangsImport;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{

    public function all()
    {
        $barang = Barang::all();
        return view("barang", [
            "barang" => $barang,
            "title" => "semua barang"
        ]);
    }

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
            "jurusan" => $request->jurusan,
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

    public function jurusan($jurusan)
    {
        $barang = DB::table("barangs")->where("jurusan", $jurusan)->get();
        
        return view("barang", [
            "barang" => $barang,
            "title" => "Barang",
            // "jurusan" => $jurusan,
        ]);
    }

    public function export()
    {
        return Excel::download(new BarangsExport, "Laporan-Penghasilan-Technopark.xlsx");
    }

    public function import(Request $request)
    {
        Excel::import(new BarangsImport, $request->file("file"));
        // dd($request->file("file"));
        return redirect("/dashboard");
    }


     public function test()
    {
        $test = DB::table("barangs")->select("jurusan")->get();
        return view("test", [
            "test" => $test
        ]);
    }

}
