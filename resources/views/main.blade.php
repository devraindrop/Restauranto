<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Restauranto</h1>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-gray-300">Home</a></li>
                <li><a href="{{route('restaurants.index')}}" class="hover:text-gray-300">Restaurants</a></li>
                <li><a href="{{route('restaurants.create')}}" class="hover:text-gray-300">Create</a></li>
                <li><a href="{{route('dashboard')}}" class="hover:text-gray-300">dashboard</a></li>
            </ul>
        </div>
    </nav>

    @if(session('success'))
        <div class="bg-green-200 border-green-600 text-green-800 border-l-4 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif


    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto">
            <p>&copy; 2024 Restaurant List. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
