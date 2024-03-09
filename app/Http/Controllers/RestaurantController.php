<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::paginate(3);
        return view('allRestaurant', compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        //$restaurant = Restaurant::findOrFail($id);

        return view('restaurant', compact('restaurant'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(RestaurantRequest $request)
    {
        //$request = dd($request->all());

        $validatedData = $request->validated();

        Restaurant::create($validatedData);

        return redirect()->route('restaurants.index')->with('success' , 'your data has been added');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('create', [
            'restaurant' => $restaurant,
        ]);
    }

    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {
        $validatedData = $request->validated();

        $restaurant->update($validatedData);

        return redirect()->route('restaurants.index')->with('success' , 'your data has been updated');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')->with('success' , 'your data has been deleted');
    }
}
