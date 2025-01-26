<x-layout>

        @auth

        <h1 class="text-4xl">
            Hello to {{env('APP_NAME')}}
        </h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt molestias laudantium velit debitis, dolor eius praesentium incidunt atque dolores iure quos maxime, nam quas quibusdam harum veritatis dicta pariatur. Fugiat?
        </p>


        <x-button>Click me</x-button>
        @endauth

        @guest
        <h1 class="text-4xl">
            Hello to {{env('APP_NAME')}}
        @endguest

</x-layout>

