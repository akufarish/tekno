@extends('layout.admin')
@section('container')
<div class="mr-96">
<form method="POST" action="/barang/tambah" class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    @csrf
    <h3 class="mb-5 text-xl">Tambah</h3>
    <input type="text" placeholder="nama barang"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="nama_barang" name="nama_barang" >
    <input type="text" placeholder="qty"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="qty" name="qty" >
    <input type="text" placeholder="satuan"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="satuan" name="satuan" >
    <input type="text" placeholder="harga_jual"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="harga_jual" name="harga_jual" >
    <input type="text" placeholder="total_modal"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="total_modal" name="total_modal" >
    <input type="text" placeholder="laba"
        class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
        required id="laba" name="laba" >
    <div class="mb-4 flex justify-between text-gray-500">
    </div>
    <button
        class="px-32 py-2 bg-blue-500 text-white rounded-xl duration-200 hover:duration-200 transition-all hover:bg-blue-700 "
        type="submit">Tambah</button>
</form>
</div>
@endsection