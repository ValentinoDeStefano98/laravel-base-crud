<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Comics</title>
</head>
<body>

    <h1 class="text-primary text-center">Boolean-Comics</h1>

    @forelse ($comics as $comic)

        <h1>{{$comic -> title}}</h1>

    @empty
        <h2>Il database è vuoto</h2>

    @endforelse
   
    <script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>