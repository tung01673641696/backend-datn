<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'house_id'=> '1',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '3000000',
                'price_deposit' => '3000000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.postimg.cc/TPYQrRkQ/8b5c339b3e0cc052991d.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ]
        ]);
    }
}
