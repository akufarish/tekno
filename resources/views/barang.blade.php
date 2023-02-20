@extends('layout.admin')
@section('container')
    <div class="h-full">
        <div class="block bg-white shadow-md p-6 mx-12 my-6">
            <h3 class="mb-3 text-xl">Event Table</h3>
            <div class="border-b-2 mb-3"></div>
            <div class="border-b-2 mb-5">
                <a href="/barang/tambah"
                    class="py-2 px-2 rounded-md mb-3 bg-green-400 text-white hover:bg-green-500 duration-500 transition-all"><i
                        class="bi bi-plus-lg"></i> Tambah Data</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-hidden sm:mx-6 lg:mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full border">
                                <thead class="bg-white">
                                    <tr>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                            No
                                        </th>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                            Foto
                                        </th>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                            Nama Barang
                                        </th>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                            Harga
                                        </th>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                            Stok barang
                                        </th>
                                        <th
                                            class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-center">
                                            Update
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $barang)
                                        <tr class="odd:bg-gray-100 border-b">
                                            <td
                                                class="px-6 border-2 border-gray-300 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $barang->id }}
                                            </td>
                                            <td
                                                class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <img src="{{ $barang->foto_barang }}" alt="" width="100">
                                            </td>
                                            <td
                                            class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $barang->nama_barang }}
                                        </td>   
                                            <td
                                                class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                Rp.{{ $barang->harga }}
                                            </td>
                                            <td
                                                class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                {{ $barang->stok_barang }}
                                            </td>
                                            <td
                                                class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <div class="flex justify-center gap-2">
                                                    <a href="/barang/ubah/{{ $barang->id }}"
                                                        class="px-3 py-2 rounded-md text-white bg-green-400 hover:bg-green-500 duration-500 transition-all">
                                                        <i class="bi bi-pencil-square"></i> Edit
                                                    </a>
                                                    <a href="/barang/hapus/{{ $barang->id }}"
                                                        class="px-3 py-2 rounded-md text-white bg-red-500 hover:bg-red-600 duration-500 transition-all">
                                                        <i class="bi bi-x-lg"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection