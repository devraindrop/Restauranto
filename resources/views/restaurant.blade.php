@extends('main')
@section('content')
    <div>
        <h1>{{ $restaurant->name }}</h1>
        <p>{{ $restaurant->address }}</p>
        <p>{{ $restaurant->discription }}</p>
        <p>{{ $restaurant->phone_number }}</p>
        <p>{{ $restaurant->rating }}</p>
        <a href="/restaurants">back</a>
    </div>
@endsection
