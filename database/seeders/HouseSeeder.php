<?php

namespace Database\Seeders;


use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houses = [
            ['name' => 'Tijuana'],
            ['name' => 'Rosarito'],
            ['name' => 'Cuesta Blanca'],
        ];

        collect($houses)->map(function ($house) {
            return House::factory()->create($house);
        });


    }
}
