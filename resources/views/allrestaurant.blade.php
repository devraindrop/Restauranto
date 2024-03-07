@extends('main')
@section('content')
<div>
    <h1>All restaurant</h1>
    @foreach ($restaurants as $restaurant)
        <div>
            <span>{{ $restaurant->id }} . </span>
            <a href='restaurants/{{$restaurant->id}}'>
                <strong>{{ $restaurant->name}}</strong>
            </a>
            <p>{{ $restaurant->address}}</p>
            <p>{{ $restaurant->discription}}</p>
            <p>{{ $restaurant->phone_number}}</p>
            <p>{{ $restaurant->rating}}</p>
        </div>
    @endforeach
    <a href="/"><strong>Go to Home</strong></a>
</div>
@endsection
