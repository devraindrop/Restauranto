@extends('main')
@section('content')
<div class="max-w-2xl mx-auto mt-8 bg-white p-6 rounded-md shadow-md">
    <h1 class="text-3xl font-bold mb-4">{{ $restaurant->name }}</h1>

    <div class="mb-4">
        <strong class="text-gray-600">Address:</strong>
        <p>{{ $restaurant->address }}</p>
    </div>

    <div class="mb-4">
        <strong class="text-gray-600">Description:</strong>
        <p>{{ $restaurant->description }}</p>
    </div>

    <div class="mb-4">
        <strong class="text-gray-600">Phone Number:</strong>
        <p>{{ $restaurant->phone_number }}</p>
    </div>

    <div class="mb-4">
        <strong class="text-gray-600">Rating:</strong>
        <p>{{ $restaurant->rating }}</p>
    </div>

    <a href="/restaurants" class="text-blue-500 hover:underline">Back to All Restaurants</a>
</div>

@endsection
