<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r bg-blue-500 from-violet-500">
    <div class="grid h-screen place-items-center">
        @if(Illuminate\Support\Facades\Session::has("message"))
        <div
        class="mb-4 rounded-lg bg-green-400 px-6 py-5 text-base text-green-700"
        role="alert">
        {{ Illuminate\Support\Facades\Session::get("message") }}
      </div>
        @endif   
        @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div
         class="mb-4 rounded-lg bg-red-300 px-6 py-5 text-base text-red-700"
         role="alert">
         {{ $error }}
       </div>
     @endforeach
 @endif
        <form action="/login" method="POST" class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            @csrf
            <h3 class="mb-5 text-xl">Hi, Welcome!</h3>
            <input type="text" placeholder="Name"
                class="border-b-2 outline-none border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
                 id="username" name="name" >
            <input type="password" placeholder="Password"
                class="border-b-2 outline-none my-5 border-b-blue-400 block duration-500 w-full px-3 py-2 focus:outline-none focus:duration-500 focus:border-b-red-500"
                 name="password" id="password" placeholder="password">
            <div class="mb-4 flex justify-between  text-gray-500">
                <div>
                    <input type="checkbox" name="remember" id="remember" class="">
                    <label for="remember" class=" hover:text-blue-600 cursor-pointer">Remember me?</label>
                </div>
                <div>
                    <p class="text-sm hover:text-blue-600"><a href="#">Forgot Password?</a></p>
                </div>
            </div>
            <button
                class="px-32 py-2 bg-blue-500 text-white rounded-xl duration-200 hover:duration-200 transition-all hover:bg-blue-700"
                type="submit">Login</button>
            <div class="text-center mt-5 text-gray-500 hover:text-blue-600">
                <a href="register">Didn't Have Account?</a>
            </div>
        </form>
    </div>
</body>
</html>