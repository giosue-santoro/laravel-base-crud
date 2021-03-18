<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
        <title>Crud & Birr</title>
    </head>
<body>

    <table class="table thead-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th scope="col">Country</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
            @foreach($beers as $beer)
                <tr>

                    <th scope="row">{{ $beer->id }}</th>
                    <td>{{ $beer->brand }}</td>
                    <td>{{ $beer->country }}</td>
                    <td>{{ $beer->price }}</td>
                    <td><img src="{{ $beer->image }}" width="150px"></td>

                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>

