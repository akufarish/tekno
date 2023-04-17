@extends('layout.admin')
@section('container')
<form method="POST" action="/barang/tambah" class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    @csrf
    <h3 class="mb-5 text-xl">Tambah</h3>
    <input type="text" placeholder="Name"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="nama_barang" name="nama_barang" >
    <input type="text" placeholder="harga"
        class="border-b-2 outline-none my-5 border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required name="harga" id="harga">
    <input type="text" placeholder="jurusan"
        class="border-b-2 outline-none my-5 border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required name="jurusan" id="jurusan">
    <input type="text" placeholder="stok_barang"
        class="border-b-2 outline-none my-5 border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required name="stok_barang" id="stok_barang">
    <div class="mb-4 flex justify-between text-gray-500">
    </div>
    <button
        class="px-32 py-2 bg-blue-500 text-white rounded-xl duration-200 hover:duration-200 transition-all hover:bg-blue-700 "
        type="submit">Tambah</button>
</form>
@endsection