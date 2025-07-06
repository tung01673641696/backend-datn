<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DistrictSeeder::class,
            WardSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            HouseSeeder::class,
            RoomSeeder::class,
            PostSeeder::class,
            RentalPostSeeder::class
        ]);
    }
}
