@extends('layout.admin')
@section('container')
<div class=" h-full">
    <h3 class="pt-5 font-serif text-xl">Dashboard</h3>
    <div class="grid lg:grid-cols-4 gap-3">
        <a href="{{ route("all") }}" class="flex justify-center mt-6">
            <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-orange-500 w-72 hover:border-l-orange-600 duration-500 transition-all cursor-pointer hover:opacity-90">
                <div class="flex flex-row-reverse justify-between">
                    <span class="bg-orange-200 hover:bg-orange-300 duration-500 transition-all px-4 py-3 rounded-full my-5 ">
                        <i class="bi bi-hospital text-orange-500 hover:text-orange-600 duration-500 transition-all text-xl"></i>
                    </span>
                    <p class="flex items-center mr-5">Keperawatan sosial</p>
            </div>
        </div>
        <a href="/barang/PEKSOS" class="flex justify-center mt-6">
            <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-orange-500 w-72 hover:border-l-orange-600 duration-500 transition-all cursor-pointer hover:opacity-90">
                <div class="flex flex-row-reverse justify-between">
                    <span class="bg-orange-200 hover:bg-orange-300 duration-500 transition-all px-4 py-3 rounded-full my-5 ">
                        <i class="bi bi-hospital text-orange-500 hover:text-orange-600 duration-500 transition-all text-xl"></i>
                    </span>
                    <p class="flex items-center mr-5">Keperawatan sosial</p>
            </div>
        </div>
    </a>
    <a href="/barang/TF" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-warning-200 w-72 hover:border-l-warning-600 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-warning-200 px-4 py-3 rounded-full my-5 hover:bg-warning-300 duration-500 transition-all">
                    <i class="bi bi-tools text-warning-600 hover:text-warning-200 duration-500 transition-all text-xl"></i>
                </span>
                <p class="flex items-center mr-5">Teknik furniture</p>
        </div>
        </div>
    </a>
    <a href="/barang/BCT" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-green-500 w-72 hover:border-l-green-600 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-green-200 px-4 py-3 rounded-full my-5 hover:bg-green-300 duration-500 transition-all">
                    <i class="fa-sharp fa-solid fa-clapperboard text-green-500 hover:text-green-600 duration-500 transition-all text-xl"></i>
                </span>
                <p class="flex items-center mr-5">Broadcasting Dan Film</p>
        </div>
        </div>
    </a>
    <a href="/barang/PPLG" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-gray-500 w-72 hover:border-l-gray-600 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-gray-200 px-4 py-3 rounded-full my-5 hover:bg-gray-300 duration-500 transition-all">
                    <i class="bi bi-code-slash z-20 text-gray-500 hover:text-gray-600 duration-500 transition-all text-xl"></i>
                    <i class="bi bi-emoji-frown hidden hover:block opacity-0 hover:opacity-100 transition-all duration-300"></i> 
                </span>
                <p class="flex items-center mr-5">Perkembangan Perangkat Lunak & Gim</p>
        </div>
        </div>
    </a>
    <a href="/barang/TKI" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-warning-500 w-72 hover:border-l-warning-600 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-warning-200 px-4 py-3 rounded-full my-5 flex items-center hover:bg-warning-300 duration-500 transition-all text-2xl">
                    <i class="fa-solid fa-flask text-warning-600 hover:text-warning-200 duration-500 transition-all text-center"></i>
                </span>
                <p class="flex items-center mr-5">Teknik Kimia Industri</p>
        </div>
        </div>
    </a>
    <a href="/barang/TKJ" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-blue-300 w-72 hover:border-l-blue-300 duration-300 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-blue-300 px-4 py-3 rounded-full my-5 flex items-center hover:bg-blue-300 duration-300 transition-all text-2xl">
                    <i class="fa-solid fa-server text-blue-600 hover:text-blue-300 duration-200 transition-all text-center"></i>
                </span>
                <p class="flex items-center mr-5">Teknik Komputer Jaringan &  Telekomunikasi</p>
        </div>  
        </div>
    </a>
    <a href="/barang/DKV" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-yellow-300 w-72 hover:border-l-yellow-400 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-yellow-200 px-4 py-3 rounded-full my-5 flex items-center hover:bg-yellow-300 duration-500 transition-all text-2xl">
                    <i class="fa-solid fa-camera-retro text-yellow-500 hover:text-yellow-600 duration-500 transition-all text-center"></i>
                </span>
                <p class="flex items-center mr-5">Desain Komunikasi & Visual</p>
        </div>  
        </div>
    </a>
    <a href="/barang/Animasi" class="flex justify-center mt-6">
        <div class="block p-6 bg-white rounded-lg shadow-lg max-w-sm border-l-[5px] border-l-red-500 w-72 hover:border-l-red-600 duration-500 transition-all hover:opacity-90 cursor-pointer">
            <div class="flex flex-row-reverse justify-between">
                <span class="bg-red-200 px-4 py-3 rounded-full my-5 flex items-center hover:bg-red-300 duration-500 transition-all text-2xl">
                    <i class="bi bi-pencil-square text-red-500 hover:text-red-600 duration-500 transition-all text-center"></i>
                </span>
                <p class="flex items-center mr-5">Animasi</p>
        </div>  
        </div>
    </a>
    </div>
</div>
@endsection