<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" crossorigin="anonymous">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen bg-slate-50 w-full flex justify-center items-center">
        @yield('container')
    </div>
</body>

</html>
