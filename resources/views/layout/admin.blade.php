<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/styles.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body  class="bg-slate-100">
    <div class="h-screen">
        <div class="flex justify-between">
            <div class="">
                <section
                class="relative flex h-screen min-h-full items-start justify-center overflow-x-hidden border bg-gray-50 dark:border-zinc-900 dark:bg-zinc-700">
                <!-- Sidenav -->
                <nav
                  id="sidenav-3"
                  class="fixed top-0 left-0 z-[1035] h-screen w-60 -translate-x-full overflow-hidden bg-zinc-800 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0"
                  data-te-sidenav-init
                  data-te-sidenav-hidden="false"
                  data-te-sidenav-color="white">
                  <ul
                    class="relative m-0 list-none px-[0.2rem]"
                    data-te-sidenav-menu-ref>
                    <li class="relative flex justify-center items-center">
                      <a
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear  hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none w-full text-center justify-center"
                        data-te-sidenav-link-ref href="/dashboard">
                        <span class="">Dashboard</span>
                      </a>
                    </li>
                    <li class="relative">
                      <a
                        class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                        data-te-sidenav-link-ref>
                        <span
                          class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                          <i class="bi bi-calendar2-event"></i>
                        </span>
                        <span>Jurusan</span>
                        <span
                          class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
                          data-te-sidenav-rotate-icon-ref>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-5 w-5">
                            <path
                              fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd" />
                          </svg>
                        </span>
                      </a>
                      <ul
                        class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
                        data-te-sidenav-collapse-ref>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/PPLG"
                            >PPLG</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/TF"
                            >Teknik Furniture</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/Animasi"
                            >Animasi</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/TKJ"
                            >TKJ</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/DKV"
                            >DKV</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/BCT"
                            >BCT</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/KI"
                            >Kimia Industri</a
                          >
                        </li>
                        <li class="relative">
                          <a
                            class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none"
                            data-te-sidenav-link-ref href="/barang/PEKSOS"
                            >Pekerjaan Sosial</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="relative">
                      <form action="" class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem] text-gray-300 outline-none transition duration-300 ease-linear hover:bg-white/10 hover:outline-none focus:bg-white/10 focus:outline-none active:bg-white/10 active:outline-none data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none" method="post">
                        @csrf
                        <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                          <i class="bi bi-box-arrow-left"></i>
                        </span>
                        <button type="submit">Logout</button>
                      </form>
                    </li>
                  </ul>
                </nav>
                <!-- Sidenav -->
              
                <!-- Toggler -->
                <button
                  class="mt-10 inline-block rounded bg-blue-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg"
                  data-te-sidenav-toggle-ref
                  data-te-target="#sidenav-3"
                  aria-controls="#sidenav-3"
                  aria-haspopup="true">
                  <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-5 w-5">
                      <path
                        fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </button>
                <!-- Toggler -->
              </section>
            </div>
            <div class="max-h-fit">
                @yield('container')
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://kit.fontawesome.com/675d4babd4.js" crossorigin="anonymous"></script>
</body>
</html>