@extends('base')

@section('title', 'Show')

@section('content')
    <div class="product-container">
        <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="{{$beer->image}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$beer->brand}}</h5>
            <p class="card-text">{{$beer->country}}</p>
            <p class="card-text">{{$beer->price}} €</p>
            <a href="/beers" class="btn btn-primary">Return</a>
            </div>
        </div>
    </div>
@endsection

