@extends('main')
@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-md shadow">
    <h1 class="text-3xl font-bold mb-4">All Restaurants</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full mx-auto bg-white rounded-lg border-gray-700">
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
                    <td class="py-2 px-4 border-b">
                        @auth
                        @can('edit.restaurant', $restaurant)
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="text-blue-500 hover:text-blue-900">Edit</a>
                        @endcan
                        @can('delete.restaurant', $restaurant)
                            /<form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="text-red-500 hover:text-red-900">Delete</button>
                            </form>
                        @endcan
                        @endauth
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $restaurants->links() }}
        </div>
    </div>
</div>

@endsection
