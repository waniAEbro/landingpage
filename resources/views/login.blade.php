<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <img src="/images/hero-area/banner-bg.png" class="absolute h-screen w-full object-cover" alt="">
    <div class="container mx-auto justify-center items-center flex h-screen">
        <div class="w-2/3 p-12 shadow-lg rounded-xl backdrop-blur-md border border-slate-200">
            <form action="/login" method="POST" class="flex flex-col gap-8">
                @csrf
                <h2 class="font-bold text-3xl">Login</h2>
                <div class="flex flex-col gap-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="rounded-lg p-2 bg-white ring-2 ring-slate-200">
                </div>
                <div class="flex flex-col gap-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="rounded-lg p-2 ring-2 ring-slate-200">
                </div>
                <button class="bg-[#37c2db] font-semibold text-white p-3 rounded-lg">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
