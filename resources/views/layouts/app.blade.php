<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <header class="p-5 border-b bg-white shadow flex flex-row">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-3xl font-black">Sign in</h1>
        </div>

        <nav class="flex gap-2 items-center">
            <a href="{{ route('signin') }}" class="font-bold uppercase text-gray-700 text-sm">Sign in</a>
            <a href="{{ route('signup') }}" class="font-bold uppercase text-gray-700 text-sm">Sign up</a>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <h2 class="font-black text-center text-3xl uppercase mb-10">
            @yield('title')
        </h2>
        @yield('content')
    </main>

    <footer class="mt-15 text-center p-5 text-gray-700 font-bold uppercase">
        Sign in - Full Stack Web Developer - All rights reserved {{ now()->year }}
    </footer>
</body>

</html>