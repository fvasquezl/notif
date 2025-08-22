<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            HouseSeeder::class,
        ]);

        $users = [
            ['name' => 'Faustino Vasquez', 'email' => 'fvasquez@local.com'],
            ['name' => 'Sebastian Vasquez', 'email' => 'svasquez@local.com'],
        ];

        collect($users)->map(function ($user) {
            return User::factory()->create($user);
        });
    }
}
