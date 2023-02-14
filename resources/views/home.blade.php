<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
</head>
<body>
    Hallo {{ auth()->user()->name }}

    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
</body>
</html>