<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Trip;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = User::where('role', 'cheffeur')->get();
        $cities = City::all();

        if ($cities->count() < 2) return;

        foreach ($drivers as $driver) {
            for ($i = 0; $i < 5; $i++) {
                $departure = $cities->random();
                $arrival = $cities->where('id', '!=', $departure->id)->random();

                Trip::create([
                    'cheffeur_id' => $driver->id,
                    'departure_city_id' => $departure->id,
                    'arrival_city_id' => $arrival->id,
                    'departure_date' => now()->addDays(rand(1, 30))->addHours(rand(8, 20)),
                    'price_per_seat' => rand(50, 200),
                    'status' => 'waiting',
                    'available_seats' => 6,
                ]);
            }
        }
    }
}
