<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Crud & Birr</title>
    </head>
    <body>

        <h1>Crud & Birr</h1>

        @foreach($beers as $beer)
            <p>{{$beer->brand}}</p>
        @endforeach

    </body>
</html>
