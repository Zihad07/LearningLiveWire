<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    @livewireStyles
    <title>Learning Laravel livewire</title>
</head>
<body class="flex justify-center">
    {{-- @livewire('counter') --}}
    {{-- @livewire('comments', ['comments' => $comments]) --}}

    <div class="w-12/12 my-10 flex justify-center">
        <div class="w-5/12 rounded border p-2">
            @livewire('tickets')
        </div>

        <div class="w-7/12  rounded border p-2">
            @livewire('comments')
        </div>
    </div>

    @livewireScripts
</body>
</html>
