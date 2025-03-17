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
            'password' => Hash::make('tung123456')
        ]);
        User::create([
            'name' => 'Dương Tùng Lâm',
            'phone'=> '0987909090',
            'role_id' => 1,
            'password' => Hash::make('lam123456')
        ]);
        User::create([
            'name' => 'Lê Thùy Dương',
            'phone'=> '0987343419',
            'role_id' => 1,
            'password' => Hash::make('duong123456')
        ]);
        User::create([
            'name' => 'Trần Mai Chi',
            'phone'=> '0987999834',
            'role_id' => 1,
            'password' => Hash::make('chi123456')
        ]);
        User::create([
            'name' => 'Đinh Xuân Hoàng',
            'phone'=> '0987999888',
            'role_id' => 2,
            'password' => Hash::make('hoang123456')
        ]);
        User::create([
            'name' => 'Vũ Xuân Quỳnh',
            'phone'=> '0987999666',
            'role_id' => 2,
            'password' => Hash::make('quynh123456')
        ]);
        User::create([
            'name' => 'Nguyễn Đình Diệm',
            'phone'=> '0987999123',
            'role_id' => 2,
            'password' => Hash::make('diem123456')
        ]);
        User::create([
            'name' => 'Nguyễn Đình Quân',
            'phone'=> '0987000888',
            'role_id' => 2,
            'password' => Hash::make('quan123456')
        ]);
        User::create([
            'name' => 'Trần Việt Anh',
            'phone'=> '0987100128',
            'role_id' => 2,
            'password' => Hash::make('vietanh123456')
        ]);
        User::create([
            'name' => 'Vũ Văn Muôn',
            'phone'=> '0373641289',
            'role_id' => 2,
            'password' => Hash::make('muon123456')
        ]);
        User::create([
            'name' => 'Đỗ Thị Huyền',
            'phone'=> '0987464616',
            'role_id' => 2,
            'password' => Hash::make('huyen123456')
        ]);
        User::create([
            'name' => 'admin',
            'phone'=> '0987899888',
            'role_id' => 3,
            'password' => Hash::make('admin123456')
        ]);
    }
}
