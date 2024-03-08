@extends('main')
@section('content')
<div>
    <h1 class="text-3xl font-bold mb-4">All Restaurants</h1>
    <div class="overflow-x-auto">
        <table class="min-auto mx-auto bg-white rounded-md border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Rating</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $restaurant->id }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href='restaurants/{{ $restaurant->id }}' class="text-blue-500 hover:text-blue-900">
                            <strong>{{ $restaurant->name }}</strong>
                        </a>
                    </td>
                    <td class="py-2 px-4 border-b">{{ $restaurant->description }}</td>
                    <td class="py-2 px-4 border-b">{{ $restaurant->rating }}</td>
                    <td class="py-2 px-4 border-b"><a href="{{ route('restaurants.edit', $restaurant->id) }}" class="text-blue-500 hover:text-blue-900">Edit</a>/<form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
