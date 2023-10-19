<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    <title>Marketplace | @yield('title')</title>
</head>
<body>
    {{-- NAV --}}
    <nav class="p-4 bg-gray-800">
        <div class="container flex items-center justify-between mx-auto">
            <div class="flex items-center space-x-10 text-lg font-bold text-white">
                <a href="/">MarketPlace</a>
                <div class="ml-auto space-x-5">
                    <a href="/" class="text-white hover:text-blue-300">Home</a>
                    <a href="/hotpg" class="text-white hover:text-blue-300">Hot</a>
                    <a href="/about" class="text-white hover:text-blue-300">About</a>
                </div>
            </div>
        </div>
    </nav>
{{-- END NAV --}}
@yield('content')




</body>
</html>
