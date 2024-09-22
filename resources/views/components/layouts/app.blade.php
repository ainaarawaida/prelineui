<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @filamentStyles
    @vite('resources/css/filament/guest/theme.css')

</head>
<body>
    <x-sidebar>
        {{ $slot }}
    </x-sidebar>

    @filamentScripts
    @vite('resources/js/app.js')
</body>
</html>