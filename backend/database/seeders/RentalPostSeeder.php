<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('posts')->insert([
            [
                'user_id' => '12',
                'title' => 'Cho thuê phòng gần đại học Thăng Long',
                'room_id' => '1',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '12',
                'title' => 'Chung cư mini mới tại Kim Giang',
                'room_id' => '2',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '12',
                'title' => 'Chung cư mini mới an toàn PCCC',
                'room_id' => '3',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '12',
                'title' => 'Cho thuê chung cư mini đẹp',
                'room_id' => '4',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '12',
                'title' => 'Cho thuê phòng trọ giá rẻ tại Kim Giang',
                'room_id' => '5',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '12',
                'title' => 'Phòng trọ cho sinh viên Thăng Long',
                'room_id' => '6',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '13',
                'title' => 'Cho thuê chung cư mini mới tại Giảng Võ',
                'room_id' => '7',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '13',
                'title' => 'Chung cư mini cạnh hồ Giảng Võ',
                'room_id' => '8',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '13',
                'title' => 'Phòng trọ giá rẻ gần đại học Giao Thông Vận Tải',
                'room_id' => '9',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '13',
                'title' => 'Cho thuê phòng trọ sinh viên Đại học Giao Thông Vận Tải',
                'room_id' => '10',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '14',
                'title' => 'Cho thuê phòng trọ phố Hàng Mã',
                'room_id' => '11',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '14',
                'title' => 'Phòng trọ siêu rẻ tại phố Cổ',
                'room_id' => '12',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '14',
                'title' => 'Phòng trọ ngay Hồ Gươm',
                'room_id' => '13',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '14',
                'title' => 'Cho thuê phòng trọ cạnh Hồ Gươm',
                'room_id' => '14',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '15',
                'title' => 'Cho thuê homestay sinh viên đầy đủ tiện nghi',
                'room_id' => '15',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '15',
                'title' => 'Homestay sinh viên giá rẻ',
                'room_id' => '16',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '15',
                'title' => 'Cho thuê homestay sinh viên miễn phí tháng đầu',
                'room_id' => '17',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '15',
                'title' => 'Cho thuê homestay an toàn phòng cháy',
                'room_id' => '18',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Chung cư mini mới khai trương tại Đống Đa',
                'room_id' => '19',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Cho thuê chung cư mini an toàn phòng cháy',
                'room_id' => '20',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Cho thuê chung cư mini ngay bệnh viện Bạch Mai',
                'room_id' => '21',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Cho thuê chung cư mini giá rẻ nhất khu vực',
                'room_id' => '22',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Chung cư mini ngay cạnh Đại Học Thủy Lợi và Công Đoàn',
                'room_id' => '23',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Chung cư mini đầy đủ tiện nghi tại Thái Hà',
                'room_id' => '24',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Chung cư mini dành cho tân sinh viên',
                'room_id' => '25',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '16',
                'title' => 'Chung cư mini giá rẻ ngay đại học Thủy Lợi',
                'room_id' => '26',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Cho thuê phòng trọ sinh viên tại Kiến Hưng Hà Đông',
                'room_id' => '27',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Cho thuê phòng trọ giá rẻ nhất khu vực',
                'room_id' => '28',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Cho thuê phòng trọ sinh viên tại Hà Đông',
                'room_id' => '29',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Phòng trọ cho tân sinh viên tại Quang Trùng Hà Đông',
                'room_id' => '30',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Cho thuê phòng trọ gần học viện An Ninh',
                'room_id' => '31',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => '17',
                'title' => 'Cho thuê phòng trọ sinh viên tại chợ Phùng Khoang',
                'room_id' => '32',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],       
       ]);
    }
}
