<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>

<body>

    {{-- <nav class="navbar navbar-expand-lg navbar-light mb-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"
                style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Resume<span
                    class="text-primary">Builder</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                    style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <button class="btn btn-outline-primary" type="submit">Login</button>
                <button class="btn btn-outline-secondary" type="submit">Register</button>
            </div>
        </div>
    </nav> --}}

    <header class="h-24 sm:h-32 flex items-center z-30 w-full border-2 border-b-blue-500 rounded-lg">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="uppercase text-gray-800 dark:text-black font-black text-3xl">
                <a href="/"><span class="text-blue-500">CV</span>Builder</a>
            </div>
            <div class="flex items-center">
                <nav class="text-gray-800 dark:text-black uppercase text-lg lg:flex items-center hidden"
                    style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <a href="/" class="py-2 px-6 flex">Home</a>
                    <a href="{{route('dashboard')}}" class="py-2 px-6 flex">Dashboard</a>
                    <a href="#" class="py-2 px-6 flex">About us</a>
                    <button class="bg-blue-500 hover:bg-blue-700 mr-3 text-white font-bold py-2 px-4 rounded">
                        Login
                    </button>
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Register
                    </button>
                </nav>
                <button class="lg:hidden flex flex-col ml-4">
                    <span class="w-6 h-1 bg-gray-800 dark:bg-black mb-1"></span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-black mb-1"></span>
                    <span class="w-6 h-1 bg-gray-800 dark:bg-black mb-1"></span>
                </button>
            </div>
        </div>
    </header>

    <main class="bg-white relative px-28">
        @yield('content')
    </main>
    <h1>Footer</h1>

    <script src="https://kit.fontawesome.com/61da615d84.js" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>