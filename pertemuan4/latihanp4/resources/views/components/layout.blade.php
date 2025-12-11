<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tambahan slot baru dengan nama $tittle --}}
    <title>{{ $title }}</title>
    {{-- @vite('resources/css/app.css')--}}
</head>
<body>
    <nav>
        <a href="/post">Post</a>
        <a href="">Home</a>
        <a href="/about">About</a>
    </nav>

    {{ $slot}}

</body>
</html>