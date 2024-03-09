@extends('main')
@section('content')
<div class="bg-white p-6 rounded-md shadow-md w-96 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create New Restaurant</h1>

    <form action="{{ isset($restaurant) ? route('restaurants.update', $restaurant->id) : route('restaurants.store') }}" method="POST">
        @csrf
        @if (isset($restaurant))
        @method('PUT')
        @endif
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Restaurant Name:</label>
            <input type="text" id="name" name="name" value="{{ isset($restaurant) ? $restaurant->name : old('name') }}" class="mt-1 p-2 w-full border rounded-md" required>
        </div>
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="address" class="block text-gray-600">Address:</label>
            <input type="text" id="address" name="address" value="{{ isset($restaurant) ? $restaurant->address : old('address') }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        @error('address')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="phone_number" class="block text-gray-600">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ isset($restaurant) ? $restaurant->phone_number : old('phone_number') }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        @error('phone_number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="description" class="block text-gray-600">Description:</label>
            <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md" rows="3">{{ isset($restaurant) ? $restaurant->description : old('description') }}</textarea>
        </div>
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 w-full">
                {{ isset($restaurant) ? 'Update Restaurant' : 'Create Restaurant' }}
            </button>
        </div>
    </form>
</div>
@endsection
