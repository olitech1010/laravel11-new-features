<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{env('APP_NAME')}}
    </title>
    @vite(['rources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-slate-100 text-slate-900">
   <header>
    <nav class="flex justify-between items-center py-4 px-8 bg-slate-900 text-white">
        <a class="" href="">Home</a>
        <div class="flex items-center gap-4">
            <a href={{route('login')}}>login</a>
            <a href={{route('register')}}>register</a>
        </div>
    </nav>
   </header>

   <main  class="py-8 px-4 mx-auto max-w-screen-lg">
    {{$slot}}
   </main>
</body>
</html>
