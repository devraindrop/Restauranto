<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
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

    public function store(Request $request)
    {
        //$request = dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|integer|unique:restaurants,phone_number',
            'description' => 'nullable|string',
        ]);

        Restaurant::create($validatedData);

        return redirect()->route('restaurants.index')->with('success' , 'your data has been added');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('');
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        return view('');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')->with('success' , 'your data has been deleted');
    }
}
