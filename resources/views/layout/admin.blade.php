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
</head>
<body  class="bg-slate-100">
    <div class="h-screen relative">
        <div class="flex justify-between">
            <div class="">
                <aside class="w-64 h-screen fixed left-0 top-0 hidden lg:block">
                    <div class="overflow-y-auto h-full py-4 px-3 bg-gray-50 dark:bg-gray-800">
                        <h3 class="text-white text-center font-bold mb-5">Dashboard</h3>
                        <ul class="space-y-2 text-white">
                            <li>
                                <a href="dashboard" aria-current="page" class="flex hover:bg-slate-700 active duration-500 p-2 hover:rounded-md active:bg-slate-700">
                                    <i class="bi bi-speedometer2 mr-2"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/barang" class="flex hover:bg-slate-700 duration-500 p-2 hover:rounded-md active:bg-slate-700">
                                    <i class="bi bi-calendar-event mr-2"></i> Barang
                                </a>
                            </li>
                            <li>
                                <a href="user-db" class="flex hover:bg-slate-700 duration-500 p-2 hover:rounded-md active:bg-slate-700">
                                    <i class="bi bi-person-fill mr-2"></i> User
                                </a>
                            <li>
                                <a href="#" class="flex hover:bg-slate-700 duration-500 p-2 hover:rounded-md active:bg-slate-700">
                                    <i class="bi bi-box-arrow-right mr-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="max-h-fit w-4/5 left-64 ">
                @yield('container')
            </div>
        </div>

    </div>
</body>
</html>