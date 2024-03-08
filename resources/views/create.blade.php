@extends('main')
@section('content')
<div class="bg-white p-6 rounded-md shadow-md w-96 mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create New Restaurant</h1>

    <form action="{{ route('restaurants.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-600">Restaurant Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 p-2 w-full border rounded-md" required>
        </div>
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="address" class="block text-gray-600">Address:</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        @error('address')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="phone_number" class="block text-gray-600">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="mt-1 p-2 w-full border rounded-md">
        </div>
        @error('phone_number')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mb-4">
            <label for="description" class="block text-gray-600">Description:</label>
            <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md" rows="3"></textarea>
        </div>
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 w-full">
                Create Restaurant
            </button>
        </div>
    </form>
</div>
@endsection
