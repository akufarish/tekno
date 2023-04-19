@extends('layout.admin')
@section('container')
    <div class="h-full w-full flex flex-wrap container">
        <div class="bg-white shadow-md my-6 p-6 mx-32">
            <h3 class="mb-3 text-xl">Event Table</h3>
            <div class="border-b-2 mb-3"></div>
            <div class="border-b-2 mb-5">
                <div class="flex gap-11">
                <a href="/barang/tambah"
                    class="py-2 px-2 rounded-md mb-3 bg-green-400 text-white hover:bg-green-500 duration-500 transition-all"><i
                        class="bi bi-plus-lg"></i> Tambah Data</a>
                <a href="export" target="_blank"
                    class="py-2 px-2 rounded-md mb-3 bg-green-400 text-white hover:bg-green-500 duration-500 transition-all"><i
                        class="bi bi-plus-lg"></i> Export excel
                    </a>
                    <form action="/barang-import" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" id="file" required>
                        <button type="submit" class="py-2 px-2 rounded-md mb-3 bg-green-400 text-white hover:bg-green-500 duration-500 transition-all">import</button>
                    </form>
                </div>
                @if(Illuminate\Support\Facades\Session::has("message"))
                <div
                class="mb-4 rounded-lg bg-green-400 px-6 py-5 text-base text-green-700"
                role="alert">
                {{ Illuminate\Support\Facades\Session::get("message") }}
              </div>
                @endif   
                <table class="border w-fit">
                    <thead class="bg-white">
                        <tr>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                No
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Nama Barang
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                QTY
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Satuan
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Harga Modal
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Total modal
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Harga jual
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-left">
                                Laba
                            </th>
                            <th
                                class="text-sm border-2 border-gray-300 font-medium text-gray-900 px-6 py-4 text-center">
                                Update
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1
                        @endphp
                        @foreach ($barang as $barangs)
                            <tr class="odd:bg-gray-100 border-b">
                                <td
                                    class="px-6 border-2 border-gray-300 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $i++ }}
                                </td>
                                <td
                                class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $barangs->nama_barang }}
                            </td>   
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $barangs->qty }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{ $barangs->satuan }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Rp.{{ $barangs->harga_modal }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Rp.{{ $barangs->total_modal }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Rp.{{ $barangs->harga_jual }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Rp.{{ $barangs->laba }}
                                </td>
                                <td
                                    class="text-sm border-2 border-gray-300 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-center gap-2">
                                        <a href="/barang/ubah/{{ $barangs->id }}"
                                            class="px-3 py-2 rounded-md text-white bg-green-400 hover:bg-green-500 duration-500 transition-all">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <a href="/barang/hapus/{{ $barangs->id }}"
                                            class="px-3 py-2 rounded-md text-white bg-red-500 hover:bg-red-600 duration-500 transition-all">
                                            <i class="bi bi-x-lg"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $barang->links() }}
            </div>
        </div>
    </div>
@endsection