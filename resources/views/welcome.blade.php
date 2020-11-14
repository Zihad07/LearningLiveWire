<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    <title>Learning Laravel livewire</title>
</head>
<body>
    {{-- @livewire('counter') --}}
    {{-- @livewire('comments', ['comments' => $comments]) --}}
    @livewire('comments')
    @livewireScripts
</body>
</html>
