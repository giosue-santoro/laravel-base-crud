@extends('base');

@section('title', 'Index')

@section('content')
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
                    <td><a href="{{ route('beers.show', ['beer' => $beer->id]) }}">{{ $beer->brand }}</a></td>
                    <td>{{ $beer->country }}</td>
                    <td>{{ $beer->price }} €</td>
                    <td><img src="{{ $beer->image }}" width="150px"></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

