@extends('layout.admin')
@section('container')
@foreach ($barang as $barang)    
<form method="POST" action="/barang/ubah" class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
    @csrf
    <h3 class="mb-5 text-xl">Ubah</h3>
    <input type="hidden" name="id" value="{{ $barang->id }}">
    <input type="text" placeholder="nama barang"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}">
<input type="text" placeholder="qty"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="qty" name="qty" value="{{ $barang->qty }}">
<input type="text" placeholder="satuan"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="satuan" name="satuan" value="{{ $barang->satuan }}">
<input type="text" placeholder="harga_jual"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="harga_jual" name="harga_jual" value="{{ $barang->harga_jual }}">
<input type="text" placeholder="total_modal"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="total_modal" name="total_modal" value="{{ $barang->total_modal }}">
<input type="text" placeholder="laba"
    class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
    required id="laba" name="laba" value="{{ $barang->laba }}">
    <div class="mb-4 flex justify-between text-gray-500">
    </div>
    <button
        class="px-32 py-2 bg-blue-500 text-white rounded-xl duration-200 hover:duration-200 transition-all hover:bg-blue-700 "
        type="submit">Tambah</button>
</form>
@endforeach
@endsection