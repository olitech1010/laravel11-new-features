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
            <input type="text" class="input border p-2 w-full @error('username') border-red-500 @enderror" name="username" id="username" value="{{old('username')}}">
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror

        </div>
        {{-- email --}}
        <div class="mb-4">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input type="text" class="border @error('email') border-red-500 @enderror p-2 w-full" name="email" id="email" value="{{old('email')}}" >
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        {{-- password --}}
        <div class="mb-4">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input type="password" class="input border @error('password') border-red-500 @enderror p-2 w-full" name="password" id="password" >
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>



            {{-- confirm password --}}
        <div class="mb-8">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Confirm Password
            </label>
            <input type="password" class="input border @error('password_confirmation') border-red-500 @enderror p-2 w-full" name="password_confirmation" id="password" >
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>


        {{-- submit button --}}
        <div >
            <x-button class="w-full bg-green-500">Register</x-button>
        </div>
        </div>
    </form>

   </div>
</x-layout>
