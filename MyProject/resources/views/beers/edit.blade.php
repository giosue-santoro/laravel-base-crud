@extends('base')

@section('title', 'Create')

@section('content')

    @include('beers.form', ['type' => true])

@endsection

