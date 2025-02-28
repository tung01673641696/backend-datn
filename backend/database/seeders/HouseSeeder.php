<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('houses')->insert([
            [
                'name' => 'Gohomy1',
                'address' => '32 Ngõ 250 Kim Giang',
                'user_id' => 1,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy2',
                'address' => '6/16/250 Kim Giang',
                'user_id' => 1,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy3',
                'address' => '56/250 Kim Giang',
                'user_id' => 1,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy4',
                'address' => '6/100/250 Kim Giang',
                'user_id' => 1,
                'district_id' => 7,
                'ward_id' => 86,
            ],
        ]);
    }
}
