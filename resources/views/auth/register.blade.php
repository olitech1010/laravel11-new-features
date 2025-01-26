<x-layout>
   <h1  class="text-4xl mb-6 text-center">Register for new Account</h1>

   {{-- registrtion form --}}
   <div  class="mx-auto max-w-screen-sm card bg-white p-6 rounded shadow">
    <form action={{route('register')}} method="post">
        @csrf
    <div class="mb-6">
        {{-- username --}}
        <div class="mb-4">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>
        </div>
        {{-- email --}}
        <div class="mb-4">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input type="email" class="border border-gray-400 p-2 w-full" name="email" id="email" required>
        </div>

        {{-- password --}}
        <div class="mb-4">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input type="password" class="input border border-gray-400 p-2 w-full" name="password" id="password" required>
        </div>
        {{-- confirm password --}}

        <div class="mb-8">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Confirm Password
            </label>
            <input type="password" class="input border border-gray-400 p-2 w-full" name="password_confirmation" id="password_confirmation" required>
        </div>

        {{-- submit button --}}
        <div >
            <x-button class="w-full bg-green-500">Register</x-button>
        </div>
        </div>
    </form>

   </div>
</x-layout>
