<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{$title ?? 'niente titolo per te'}}</title>  mi dice: syntax error, unexpected token "endif", expecting end of file --}} 
    <title>Titolo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <x-navbar></x-navbar>
    {{$slot}}
</body>
</html>