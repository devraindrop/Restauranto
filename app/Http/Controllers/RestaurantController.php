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

    public function post()
    {
        return ('');
    }
}
