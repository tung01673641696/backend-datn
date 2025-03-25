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
                'room_type'=> 'tro_thuong',
                'name' => '101',
                'floor' => '1',
                'price' => '3000000',
                'price_deposit' => '3000000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.imgur.com/NcnYKcH.jpeg",
                    "https://i.imgur.com/jQ3qgvP.jpeg",
                    "https://i.imgur.com/tCDpPhB.jpeg",
                    "https://i.imgur.com/KPTeYB5.jpeg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '1',
                'room_type'=> 'tro_thuong',
                'name' => '102',
                'floor' => '1',
                'price' => '3000000',
                'price_deposit' => '3000000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/rSVko4Q",
                    "https://imgur.com/KBRlVvU",
                    "https://imgur.com/uUIuPXf",
                    "https://imgur.com/IVz0Kjx",
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '1',
                'room_type'=> 'tro_thuong',
                'name' => '201',
                'floor' => '2',
                'price' => '3000000',
                'price_deposit' => '3000000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.imgur.com/hFdrdIx.jpeg",
                    "https://i.imgur.com/7SeKKJy.jpeg",
                    "https://i.imgur.com/59w2oks.jpeg",
                    "https://i.imgur.com/kHM0U8S.jpeg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '1',
                'room_type'=> 'tro_thuong',
                'name' => '202',
                'floor' => '2',
                'price' => '3000000',
                'price_deposit' => '3000000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/x8VVLHe",
                    "https://imgur.com/LmVL5Fx",
                    "https://imgur.com/pPU9Nbc",
                    "https://imgur.com/JXzdy1c"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'tro_thuong',
                'name' => '101',
                'floor' => '1',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '25',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.imgur.com/7z0ZhIN.jpeg",
                    "https://i.imgur.com/CoI8Pxd.jpeg",
                    "https://i.imgur.com/UUDN16B.jpeg",
                    "https://i.imgur.com/CLBNpvs.jpeg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'tro_thuong',
                'name' => '102',
                'floor' => '1',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '25',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.imgur.com/wZD0LVT.jpeg",
                    "https://i.imgur.com/GKvR8zG.jpeg",
                    "https://i.imgur.com/9b06esT.jpeg",
                    "https://i.imgur.com/rraLckw.jpeg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'tro_thuong',
                'name' => '201',
                'floor' => '2',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '25',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/qYFvXF3",
                    "https://imgur.com/X2uSmyI",
                    "https://imgur.com/nzR7Cj8",
                    "https://imgur.com/FHRe0Dh"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'tro_thuong',
                'name' => '202',
                'floor' => '2',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '25',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/XcStpEU",
                    "https://imgur.com/7Y4mB5K",
                    "https://imgur.com/15n7RZs",
                    "https://imgur.com/1pnNwXz"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'tro_thuong',
                'name' => '101',
                'floor' => '1',
                'price' => '3200000',
                'price_deposit' => '3200000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/wWQvys1",
                    "https://imgur.com/bFBqICB",
                    "https://imgur.com/NX1Cf6k",
                    "https://imgur.com/JNiz2Ip"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'tro_thuong',
                'name' => '102',
                'floor' => '1',
                'price' => '3200000',
                'price_deposit' => '3200000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/WqVrbVZ",
                    "https://imgur.com/DijPLUD",
                    "https://imgur.com/9d583eW",
                    "https://imgur.com/fYg7umD"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'tro_thuong',
                'name' => '201',
                'floor' => '2',
                'price' => '3200000',
                'price_deposit' => '3200000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/iHks9zt",
                    "https://imgur.com/CM5EAZu",
                    "https://imgur.com/3YQpLnN",
                    "https://imgur.com/rVxVqAr"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'tro_thuong',
                'name' => '202',
                'floor' => '2',
                'price' => '3200000',
                'price_deposit' => '3200000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/ZiflCAB",
                    "https://imgur.com/Ugw0beb",
                    "https://imgur.com/X3DcZpy",
                    "https://imgur.com/6gv33d4"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'tro_thuong',
                'name' => '101',
                'floor' => '1',
                'price' => '3600000',
                'price_deposit' => '3600000',
                'area' => '30',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/AjeeqbL",
                    "https://imgur.com/s2IjbXA",
                    "https://imgur.com/wqsgn6Z",
                    "https://imgur.com/rItOs8V"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'tro_thuong',
                'name' => '102',
                'floor' => '1',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '30',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/vGjbj9H",
                    "https://imgur.com/1EyQf6x",
                    "https://imgur.com/b8r3qN2",
                    "https://imgur.com/iu69KrK"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'tro_thuong',
                'name' => '201',
                'floor' => '2',
                'price' => '2500000',
                'price_deposit' => '2500000',
                'area' => '20',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/zLfsNje",
                    "https://imgur.com/anEK9UY",
                    "https://imgur.com/0tZp6PQ",
                    "https://imgur.com/WAsGvIu"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'tro_thuong',
                'name' => '202',
                'floor' => '2',
                'price' => '2500000',
                'price_deposit' => '2500000',
                'area' => '20',
                'user_number' => '3',
                'image' => json_encode([
                    "https://imgur.com/IRZfxUt",
                    "https://imgur.com/SMzjYG2",
                    "https://imgur.com/gHnfeLR",
                    "https://imgur.com/SVb8uJK"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'chung_cu_mini',
                'name' => '101',
                'floor' => '1',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/bugCtpP",
                    "https://imgur.com/EpLwGO5",
                    "https://imgur.com/YojAJdG",
                    "https://imgur.com/sOlfRjS"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'chung_cu_mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4000000',
                'price_deposit' => '4000000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/IemMiRj",
                    "https://imgur.com/MWHBuX3",
                    "https://imgur.com/4t2QaC0",
                    "https://imgur.com/M8ZCJHy"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'chung_cu_mini',
                'name' => '201',
                'floor' => '2',
                'price' => '4500000',
                'price_deposit' => '4500000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/XWmnM5J",
                    "https://imgur.com/TFRVjPJ",
                    "https://imgur.com/4VUiY0R",
                    "https://imgur.com/IfY5Kbt"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'chung_cu_mini',
                'name' => '202',
                'floor' => '2',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/QxehTV1",
                    "https://imgur.com/yPMPf3q",
                    "https://imgur.com/1ruozHy",
                    "https://imgur.com/Kgc2axI"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '19',
                'room_type'=> 'chung_cu_mini',
                'name' => '101',
                'floor' => '1',
                'price' => '5000000',
                'price_deposit' => '5000000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/m0ugkyP",
                    "https://imgur.com/qTZ0Mj7",
                    "https://imgur.com/X5TWCRj",
                    "https://imgur.com/vlqWZqU"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '19',
                'room_type'=> 'chung_cu_mini',
                'name' => '102',
                'floor' => '1',
                'price' => '5000000',
                'price_deposit' => '5000000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/xfa10GZ",
                    "https://imgur.com/zrBt9VS",
                    "https://imgur.com/CX0plg2",
                    "https://imgur.com/2hu1Fhi"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '19',
                'room_type'=> 'chung_cu_mini',
                'name' => '201',
                'floor' => '2',
                'price' => '5000000',
                'price_deposit' => '5000000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/D9kWgWO",
                    "https://imgur.com/sykblD6",
                    "https://imgur.com/CERKmga",
                    "https://imgur.com/ytGOlST"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
            [
                'house_id'=> '19',
                'room_type'=> 'chung_cu_mini',
                'name' => '202',
                'floor' => '2',
                'price' => '4500000',
                'price_deposit' => '4500000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://imgur.com/xhJgNj0",
                    "https://imgur.com/XYjXHEb",
                    "https://imgur.com/5qfFHpp",
                    "https://imgur.com/s4j3SFz"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'is_available'=> true
            ],
        ]);
    }
}
