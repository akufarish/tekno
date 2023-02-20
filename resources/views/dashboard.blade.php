@extends('layout.admin')
@section('container')
    <div class=" h-full">
        <h3 class="pt-5 mx-9 font-serif text-xl">Dashboard</h3>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-3">
            @foreach ($barang as $barang)                    
                <div class="flex justify-center mt-6">
                    <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-b-[5px] border-b-blue-500 hover:border-b-blue-600 duration-500 transition-all cursor-pointer hover:opacity-90">
                        <div class="flex flex-col">
                            <a href="dashboard/{{ $barang->id }}">
                                <img src="{{ $barang->foto_barang }}" alt="" >
                            </a>
                            <p class="flex items-center mt-5">{{ $barang->nama_barang }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    </div>
@endsection