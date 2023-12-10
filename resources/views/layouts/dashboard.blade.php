<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <style>
        *::-webkit-scrollbar {
            display: none;
        }

        * {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    @stack('head')
    <title>Dashboard Sperihan</title>
    <link rel="shortcut icon" href="/images/head.png" type="image/x-icon">
    <link rel="icon" href="/images/head.png" type="image/x-icon">
</head>

<body class="flex">
    <nav class="sticky bg-white shadow-lg left-0 top-0 h-screen w-1/5 flex flex-col items-center gap-4 p-4">
        <img src="/images/logo.png" class="w-1/3 object-cover my-12" alt="">
        <a href="/dashboard"
            class="w-full text-center p-4 rounded-lg {{ Request::segment(2) == null ? 'bg-blue-500 shadow-lg font-bold text-white' : 'hover:shadow-lg' }} ">Home</a>
        <a href="/dashboard/blogs"
            class="w-full text-center p-4 hover:shadow-lg rounded-lg {{ Request::segment(2) == 'blogs' ? 'bg-blue-500 shadow-lg font-bold text-white' : 'hover:shadow-lg' }}">Blog</a>
        <a href="/dashboard/subscribtions"
            class="w-full text-center p-4 hover:shadow-lg rounded-lg {{ Request::segment(2) == 'subscribtions' ? 'bg-blue-500 shadow-lg font-bold text-white' : 'hover:shadow-lg' }}">Subscribtion</a>
    </nav>
    <div class="bg-pink min-h-screen w-4/5 flex-none bg-slate-100">
        <div class="container mx-auto p-8">
            @yield('content')
        </div>
    </div>
</body>

@stack('scripts')

</html>
