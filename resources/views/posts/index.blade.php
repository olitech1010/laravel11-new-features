<x-layout>

        @auth


        @endauth

        @guest
        <h1 class="text-4xl">
            Hello to {{env('APP_NAME')}}
        @endguest

</x-layout>

