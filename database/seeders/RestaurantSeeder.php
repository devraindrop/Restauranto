<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'name' => 'Cozy Corner Cafe',
            'address' => '123 Main Street, Cityville',
            'phone_number' => '123-456-7890',
            'user_id' => '3',
            'description' => 'A cozy cafe serving breakfast and brunch.',
            'rating' => 4.5,
        ]);

        Restaurant::create([
            'name' => 'Family Feast Bistro',
            'address' => '456 Oak Avenue, Townsville',
            'phone_number' => '987-654-3210',
            'user_id' => '4',
            'description' => 'Family-friendly bistro with a diverse menu.',
            'rating' => 3.8,
        ]);

        Restaurant::create([
            'name' => 'Sizzling Steaks Grill',
            'address' => '789 Pine Street, Villagetown',
            'phone_number' => '456-789-0123',
            'description' => 'Grill and steakhouse with a sizzling menu.',
            'rating' => 4.2,
        ]);

        Restaurant::create([
            'name' => 'Oceanview Seafood Restaurant',
            'address' => '234 Beach Boulevard, Coastal City',
            'phone_number' => '567-890-1234',
            'description' => 'Seafood restaurant with a stunning ocean view.',
            'rating' => 4.7,
        ]);

        Restaurant::create([
            'name' => 'Spicy Noodle House',
            'address' => '876 Spice Lane, Flavortown',
            'phone_number' => '345-678-9012',
            'description' => 'Authentic noodle house with a variety of spicy dishes.',
            'rating' => 4.0,
        ]);
    }
}
