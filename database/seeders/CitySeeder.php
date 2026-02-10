<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Casablanca', 'x' => 10, 'y' => 4],
            ['name' => 'Rabat', 'x' => 11, 'y' => 3],
            ['name' => 'Marrakech', 'x' => 10, 'y' => 6],
            ['name' => 'Tangier', 'x' => 12, 'y' => 1],
            ['name' => 'Agadir', 'x' => 8, 'y' => 7],
            ['name' => 'Fes', 'x' => 13, 'y' => 3],
            ['name' => 'Oujda', 'x' => 16, 'y' => 2],
            ['name' => 'Essaouira', 'x' => 8, 'y' => 6],
            ['name' => 'Safi', 'x' => 9, 'y' => 5],
            ['name' => 'Beni Mellal', 'x' => 12, 'y' => 5],
            ['name' => 'Nador', 'x' => 15, 'y' => 2],
            ['name' => 'Layoune', 'x' => 5, 'y' => 10],
            ['name' => 'Dakhla', 'x' => 2, 'y' => 15],
        ];

        DB::table('cities')->upsert($cities, ['name'], ['x', 'y']);
    }
}
