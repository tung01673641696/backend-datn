<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'name' => 'Quận Ba Đình',
                'image' => 'https://i.imgur.com/zUSMPOB.jpeg'
            ],
            [
                'name' => 'Quận Hoàn Kiếm',
                'image' => 'https://i.imgur.com/Si48zJy.jpeg'
            ],
            [
                'name' => 'Quận Hai Bà Trưng',
                'image' => 'https://i.imgur.com/jHLWVRB.jpeg'
            ],
            [
                'name' => 'Quận Đống Đa',
                'image' => 'https://i.imgur.com/Y4msjn2.jpeg'
            ],
            [
                'name' => 'Quận Hà Đông',
                'image' => 'https://i.imgur.com/Mbb0Sk9.jpeg'
            ],
            [
                'name' => 'Quận Cầu Giấy',
                'image' => 'https://i.imgur.com/t22aFvp.jpeg'
            ],
            [
                'name' => 'Quận Thanh Xuân',
                'image' => 'https://i.imgur.com/QseSdA3.jpeg'
            ],
            [
                'name' => 'Quận Nam Từ Liêm',
                'image' => 'https://i.imgur.com/tKdF9nb.jpeg'
            ],
            [
                'name' => 'Quận Long Biên',
                'image' => 'https://i.imgur.com/jSor4qd.jpeg'
            ],
            [
                'name' => 'Quận Hoàng Mai',
                'image' => 'https://i.imgur.com/Z8JcN24.jpeg'
            ],
            [
                'name' => 'Quận Bắc Từ Liêm',
                'image' => 'https://i.imgur.com/Q8ISb23.jpeg'
            ],
            [
                'name' => 'Quận Tây Hồ',
                'image' => 'https://i.imgur.com/6VyXT1Z.jpeg'
            ]
        ,]);
    }
}
