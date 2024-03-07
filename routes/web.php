<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');
Route::get('/restaurants/restaurant', [RestaurantController::class, 'create'])->name('restaurant.create');
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurant.show');

Route::get('/deals', function () {
    return view('deals');
});
