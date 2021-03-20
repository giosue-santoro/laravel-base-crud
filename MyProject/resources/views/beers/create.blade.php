@extends('base')

@section('title', 'Create')

@section('content')

    <form action="{{ route('beers.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Brand</label>
            <input class="form-control" type="text" name="brand" placeholder="Brand">
        </div>

        <div class="form-group">
            <label for="content">Country</label>
            <input class="form-control" type="text" name="country" placeholder="Country">
        </div>

        <div class="form-group">
            <label for="content">Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="content">Image</label>
            <input class="form-control" type="text" name="image" placeholder="Image">
        </div>

        <input type="submit" value="Invia">
    </form>

@endsection

