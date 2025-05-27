<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Đổi nước',
                'image' => 'https://i.postimg.cc/DynbjCGT/Capture.png'
            ],
            [
                'name' => 'Đổi ga',
                'image' => 'https://i.postimg.cc/tCC1bs4Z/Gas-T2-01-min-e1655534362347.jpg'
            ],
            [
                'name' => 'Giặt là',
                'image' => 'https://i.postimg.cc/NjP90Bzs/20240802-6-ULWxb-WB.png'
            ],
            [
                'name' => 'Sửa chữa',
                'image' => 'https://i.postimg.cc/SRrjbh9p/sua-chua-dien-nuoc-tai-ha-noi-1.jpg'
            ],
            [
                'name' => 'Vận chuyển',
                'image' => 'https://i.postimg.cc/cLjCSTv6/V-n-chuy-n-b-ng-xe-t-i-mini.jpg'
            ],
            [
                'name' => 'Thiết bị PCCC',
                'image' => 'https://i.postimg.cc/sxVDcNNH/B-ng-ch-d-n-l-i-tho-t-hi-m-Exit.jpg'
            ]
        ,]);
    }
}
