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
                'user_id' => 5,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy2',
                'address' => '6/16/250 Kim Giang',
                'user_id' => 5,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy3',
                'address' => '56/250 Kim Giang',
                'user_id' => 5,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'Gohomy4',
                'address' => '6/100/250 Kim Giang',
                'user_id' => 5,
                'district_id' => 7,
                'ward_id' => 86,
            ],
            [
                'name' => 'MyHome1',
                'address' => '2 Cầu Giấy',
                'user_id' => 6,
                'district_id' => 6,
                'ward_id' => 79,
            ],
            [
                'name' => 'MyHome2',
                'address' => '4 Cầu Giấy',
                'user_id' => 6,
                'district_id' => 6,
                'ward_id' => 79,
            ],
            [
                'name' => 'MyHome3',
                'address' => '6 Cầu Giấy',
                'user_id' => 6,
                'district_id' => 6,
                'ward_id' => 79,
            ],
            [
                'name' => 'MyHome4',
                'address' => '8 Cầu Giấy',
                'user_id' => 6,
                'district_id' => 6,
                'ward_id' => 79,
            ],
            [
                'name' => 'MyHome5',
                'address' => '10 Cầu Giấy',
                'user_id' => 6,
                'district_id' => 6,
                'ward_id' => 79,
            ],
            [
                'name' => 'HappyHome1',
                'address' => '2 Kim Mã',
                'user_id' => 7,
                'district_id' => 1,
                'ward_id' => 5,
            ],
            [
                'name' => 'HappyHome2',
                'address' => '10 Kim Mã',
                'user_id' => 7,
                'district_id' => 1,
                'ward_id' => 5,
            ],
            [
                'name' => 'HappyHome3',
                'address' => '20 Kim Mã',
                'user_id' => 7,
                'district_id' => 1,
                'ward_id' => 5,
            ],
            [
                'name' => 'CityHome1',
                'address' => '2 Trần Phú',
                'user_id' => 8,
                'district_id' => 5,
                'ward_id' => 71,
            ],
            [
                'name' => 'CityHome2',
                'address' => '17 Trần Phú',
                'user_id' => 8,
                'district_id' => 5,
                'ward_id' => 71,
            ],
            [
                'name' => 'CityHome3',
                'address' => '20 Trần Phú',
                'user_id' => 8,
                'district_id' => 5,
                'ward_id' => 71,
            ],
            [
                'name' => 'THHome1',
                'address' => '2 Chùa Bộc',
                'user_id' => 9,
                'district_id' => 4,
                'ward_id' => 53,
            ],
            [
                'name' => 'THHome2',
                'address' => '10 Chùa Bộc',
                'user_id' => 9,
                'district_id' => 4,
                'ward_id' => 53,
            ],
            [
                'name' => 'THHome3',
                'address' => '20 Chùa Bộc',
                'user_id' => 9,
                'district_id' => 4,
                'ward_id' => 53,
            ],
            [
                'name' => 'GHome1',
                'address' => '2 Trần Đại Nghĩa',
                'user_id' => 10,
                'district_id' => 3,
                'ward_id' => 31,
            ],
            [
                'name' => 'GHome2',
                'address' => '10 Trần Đại Nghĩa',
                'user_id' => 10,
                'district_id' => 3,
                'ward_id' => 31,
            ],
            [
                'name' => 'GHome3',
                'address' => '12 Trần Đại Nghĩa',
                'user_id' => 10,
                'district_id' => 3,
                'ward_id' => 31,
            ],
        ]);
    }
}
