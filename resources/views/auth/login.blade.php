<x-layout>
    <h1  class="text-4xl mb-6 text-center">Login to your Account</h1>

    {{-- login form --}}
    <div  class="mx-auto max-w-screen-sm card bg-white p-6 rounded shadow">
     <form action={{route('login')}} method="post">
         @csrf
     <div class="mb-6">
         {{-- email --}}
         <div class="mb-4">
             <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                 Email
             </label>
             <input type="text" class="input border p-2 w-full @error('email') border-red-500 @enderror" name="email" id="email" value="{{old('email')}}">
             @error('email')
                 <p class="text-red-500 text-xs mt-2">{{$message}}</p>
             @enderror

         </div>

         {{-- password --}}
         <div class="mb-2">
             <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                 Password
             </label>
             <input type="password" class="input border @error('password') border-red-500 @enderror p-2 w-full" name="password" id="password" >
             @error('password')
             <p class="text-red-500 text-xs mt-2">{{$message}}</p>
             @enderror
         </div>

         {{-- remember login --}}
        <div class="mb-6 ">
            <input type="checkbox" class="border p-2"  name="remember" id="remember">
            <label for="remember" class=" mb-2   text-xs text-gray-700"> Remember Password</label>
        </div>


         {{-- login button --}}
         @error('login_failed')
             <p class="text-red-500 text-xs mb-2">{{$message}}</p>
         @enderror
         <div >
             <x-button class="w-full bg-green-500">Login</x-button>
         </div>
         </div>
     </form>

    </div>
 </x-layout>
