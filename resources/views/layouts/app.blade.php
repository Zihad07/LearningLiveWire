
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    @livewireStyles
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Learning Laravel livewire</title>
</head>
<body class="flex flex-wrap justify-center">

    <div class="flex w-full justify-left p-4 bg-purple-900 text-white">
        <a href="/" class="">Home</a>
        <a href="/login" class="pl-2">Login</a>
    </div>
    {{-- @livewire('counter') --}}
    {{-- @livewire('comments', ['comments' => $comments]) --}}

    @yield('content')



    @livewireScripts
</body>
</html>
