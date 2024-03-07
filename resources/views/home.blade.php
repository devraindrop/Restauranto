@extends('main')
    @section('content')
        <section>
            <h2 class="text-2xl font-bold mb-4">Featured Restaurants</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Restaurant Name</h3>
                    <p class="text-gray-600">Description of the restaurant.</p>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </section>
    @endsection
