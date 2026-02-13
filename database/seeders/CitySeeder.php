<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{

    public function run(): void
    {
    $cities = [
    ['name' => 'Casablanca', 'x' => 33.58831, 'y' => -7.61138],  
    ['name' => 'Rabat', 'x' => 34.01325, 'y' => -6.83255],       
    ['name' => 'Marrakech', 'x' => 31.63416, 'y' => -7.99994],
    ['name' => 'Tangier', 'x' => 35.76727, 'y' => -5.79975],
    ['name' => 'Agadir', 'x' => 30.42018, 'y' => -9.59815],
    ['name' => 'Fes', 'x' => 34.03313, 'y' => -5.00028],
    ['name' => 'Oujda', 'x' => 34.686667, 'y' => -1.911389],
    ['name' => 'Essaouira', 'x' => 31.5100, 'y' => -9.7700],
    ['name' => 'Safi', 'x' => 32.29939, 'y' => -9.23718],
    ['name' => 'Beni Mellal', 'x' => 32.33725, 'y' => -6.34983],
    ['name' => 'Nador', 'x' => 35.16813, 'y' => -2.93352],       
    ['name' => 'Laayoune', 'x' => 27.1212, 'y' => -13.2034],      
    ['name' => 'Dakhla', 'x' => 30.41145, 'y' => -9.55344],      
];

        DB::table('cities')->upsert($cities, ['name'], ['x', 'y']);
    }
}//
