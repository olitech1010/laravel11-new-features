<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>
        {{env('APP_NAME')}}
    </title>
    @vite(['rources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-slate-100 text-slate-900">
   <header>
    <nav class="">
        <a class="text-white" href={{route('home')}}>Home</a>
        @auth

        <div x-data="{open:false}" class="relative place-items-center">
            <button x-on:click="open = !open" type="button" class="round-btn">
                <img src="https://picsum.photos/200/" alt="">
            </button>

            {{-- DROP DOWN --}}
            <div x-show="open" class="flex flex-col items-start p-2 bg-white shadow-lg absolute top-10 right-0 rounded-lg overflow-hidden font-light w-48" @click.outside="open = false">
                <!-- Username -->
                <p class="username mb-2 border-b border-b-slate-300 p-1 w-full flex items-center">
                    <iconify-icon icon="mdi:user" class="text-lg text-gray-600 mr-2"></iconify-icon>
                    {{auth()->user()->username}}
                </p>

                <!-- Dashboard Link -->
                <a href="{{route('dashboard')}}" class="font-medium p-1 w-full flex items-center hover:bg-slate-100 rounded">
                    <iconify-icon icon="mdi:view-dashboard" class="text-lg text-gray-600 mr-2"></iconify-icon>
                    Dashboard
                </a>

                <!-- Settings Link -->
                <a href="#" class="font-medium p-1 w-full flex items-center hover:bg-slate-100 rounded">
                    <iconify-icon icon="mdi:cog" class="text-lg text-gray-600 mr-2"></iconify-icon>
                    Settings
                </a>

                <!-- Logout Link -->
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="font-medium p-1 w-full flex items-center hover:bg-slate-100 rounded">
                            <iconify-icon icon="mdi:logout" class="text-lg text-gray-600 mr-2"></iconify-icon>
                            Logout
                        </button>
                    </form>

            </div>
        </div>
        @endauth
        @guest

        <div class="flex items-center text-white gap-4">
            <a href={{route('login')}}>login</a>
            <a href={{route('register')}}>register</a>
        </div>
        @endguest
    </nav>
   </header>

   <main  class="py-8 px-4 mx-auto max-w-screen-lg">
    {{$slot}}
   </main>
</body>
</html>
