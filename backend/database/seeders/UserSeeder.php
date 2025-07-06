<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        User::create([
            'name' => 'Hoàng Thanh Tùng',
            'phone'=> '0373641696',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Dương Tùng Lâm',
            'phone'=> '0373641610',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Lê Thùy Dương',
            'phone'=> '0373641611',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Trần Mai Chi',
            'phone'=> '0373641612',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Văn Nên',
            'phone'=> '0373641613',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Phạm Tiến Anh',
            'phone'=> '0373641614',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Phạm Xuân Mạnh',
            'phone'=> '0373641615',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Lê Thị Thắm',
            'phone'=> '0373641616',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Ngọc Giỏi',
            'phone'=> '0373641617',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Phạm Khánh Vy',
            'phone'=> '0373641618',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Văn Toàn',
            'phone'=> '0373641619',
            'role_id' => 1,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Hoàng Tùng',
            'phone'=> '0987100128',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Đinh Xuân Hoàng',
            'phone'=> '0987100129',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Đình Diệm',
            'phone'=> '0987100130',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Đình Quân',
            'phone'=> '0987100131',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Đỗ Thị Huyền',
            'phone'=> '0987100132',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Thị Đào',
            'phone'=> '0987100133',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Vũ Xuân Đức',
            'phone'=> '0987100134',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Vũ Văn Muôn',
            'phone'=> '0987100135',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Phạm Văn Giang',
            'phone'=> '0987100136',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Đỗ Văn Hiểu',
            'phone'=> '0987100137',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Đình Quyền',
            'phone'=> '0987100138',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Nguyễn Thiên Khôi',
            'phone'=> '0987100139',
            'role_id' => 2,
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Admin',
            'phone'=> '0987899888',
            'role_id' => 3,
            'password' => Hash::make('12345678')
        ]);
    }
}
