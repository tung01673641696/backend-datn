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
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '3500000',
                'price_deposit' => '3500000',
                'area' => '25',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/0Qbx8DJG/1.jpg",
                    "https://i.postimg.cc/rm3TzsSB/2.jpg",
                    "https://i.postimg.cc/0jDTQf5S/z4190085603466-ba5ec4b4447bab46555faab213ae5e9b.jpg",
                    "https://i.postimg.cc/05SRc8GN/z3501187213552-81c9f45dc70aff064f2a43a26f1e4ab8.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '1',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '3800000',
                'price_deposit' => '3800000',
                'area' => '30',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/251Xyw25/3.jpg",
                    "https://i.postimg.cc/50v7qtcd/4.jpg",
                    "https://i.postimg.cc/yxyLtrYL/z3510401704062-9763e47abe598828cc2f051892b67943.jpg",
                    "https://i.postimg.cc/RVvsK9Xy/z3510401963163-e4da8c79a6b1cfee47a89069e6913d9d.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '2',
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '32',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/VND3Tvvx/FB-IMG-1725121616465.jpg",
                    "https://i.postimg.cc/qRFWJF8Q/FB-IMG-1725121621627.jpg",
                    "https://i.postimg.cc/gJwmH8sS/FB-IMG-1725121613359.jpg",
                    "https://i.postimg.cc/pTgxGr12/FB-IMG-1725121619017.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '2',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4500000',
                'price_deposit' => '4500000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/251Xyw25/3.jpg",
                    "https://i.postimg.cc/50v7qtcd/4.jpg",
                    "https://i.postimg.cc/yxyLtrYL/z3510401704062-9763e47abe598828cc2f051892b67943.jpg",
                    "https://i.postimg.cc/RVvsK9Xy/z3510401963163-e4da8c79a6b1cfee47a89069e6913d9d.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '3',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2800000',
                'price_deposit' => '2800000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.postimg.cc/ZKLt3wZY/IMG-20240901-175831.jpg",
                    "https://i.postimg.cc/8C9qD3d4/IMG-20240901-175833.jpg",
                    "https://i.postimg.cc/sXWb2cwr/IMG-20240901-175834.jpg",
                    "https://i.postimg.cc/Znh2vdMy/IMG-20240901-175836.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '3',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2600000',
                'price_deposit' => '2600000',
                'area' => '22',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/MK6rkq2x/1.jpg",
                    "https://i.postimg.cc/c4Fk0203/4-5-M-u-decor-04-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg",
                    "https://i.postimg.cc/j5YZMrQp/4-1-M-u-decor-04-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg",
                    "https://i.postimg.cc/LXkv70xn/4-6-M-u-decor-4-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '4',
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '3800000',
                'price_deposit' => '3800000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/gkyXhbnw/FB-IMG-1725278320640.jpg",
                    "https://i.postimg.cc/MpWcb3Q9/FB-IMG-1725278323043.jpg",
                    "https://i.postimg.cc/fRBVH77D/FB-IMG-1725278325747.jpg",
                    "https://i.postimg.cc/GpfHRcSf/z5446605330309-6fd1649bf287b9f8c5addee2dae212f1.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '4',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4000000',
                'price_deposit' => '4000000',
                'area' => '32',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/XYTR6mk8/z4190348549369-1a70acbcfaa11d99ff5de0a304847a6d.jpg",
                    "https://i.postimg.cc/KYPHSzzG/z4190348534460-343847093f42c0bca9417f7a53187a3c.jpg",
                    "https://i.postimg.cc/PxKVJRY0/z4190348526720-4e8a7f287a217829eab9f6635bea92fb.jpg",
                    "https://i.postimg.cc/597kMDxC/z3576605383348-187f6467f92862a73d3ac9be86bf3296.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2500000',
                'price_deposit' => '2500000',
                'area' => '22',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/FHjZ16QG/3-1-M-u-decor-03-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg",
                    "https://i.postimg.cc/Bv4CFCS3/3-4-M-u-decor-03-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg",
                    "https://i.postimg.cc/rpjNNtsr/3-5-M-u-decor-03-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg",
                    "https://i.postimg.cc/T1Ljx79V/3-7-M-u-decor-03-c-c-ph-ng-gi-ng-nhau-decor-kh-c-nhau.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '5',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2300000',
                'price_deposit' => '2300000',
                'area' => '22',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/PrDQw3wL/IMG-20240901-201948.jpg",
                    "https://i.postimg.cc/QdrkkQQf/IMG-20240901-201950.jpg",
                    "https://i.postimg.cc/k5JQL7h8/IMG-20240901-201952.jpg",
                    "https://i.postimg.cc/59Ywh7pP/z5734174700978-61e6e680ed56f3b5cd8fb8093e7ab748.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '7',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2200000',
                'price_deposit' => '2200000',
                'area' => '22',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/0jnxWd67/IMG-1721997072169-1725188472858.jpg",
                    "https://i.postimg.cc/SNQmX55d/IMG-1721997072171-1725188477716.jpg",
                    "https://i.postimg.cc/8zjD4vTr/z5734177005360-9c2da7da00abf9d9621942c9ab4fe1eb.jpg",
                    "https://i.postimg.cc/MpNwFGG3/z5734177010954-e04386c312f2eab631d26631a146ed4a.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '7',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2400000',
                'price_deposit' => '2400000',
                'area' => '24',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/KvWCZHyR/FB-IMG-1725123247192.jpg",
                    "https://i.postimg.cc/LXv0GyT4/IMG-20240901-183949.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '8',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2500000',
                'price_deposit' => '2500000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/hG255yMD/20240902-083654.jpg",
                    "https://i.postimg.cc/RhHpqMmh/20240902-083704.jpg",
                    "https://i.postimg.cc/bJKL7Knh/20240902-083743.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '8',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2600000',
                'price_deposit' => '2600000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/T3C0dybQ/z3832785529140-c7a907e6b13e907700999c1de82cb8e6.jpg",
                    "https://i.postimg.cc/fbyKJwjs/z3832786097927-3009a8851affbffcbdffef9e7a403875.jpg",
                    "https://i.postimg.cc/cH8BBXb5/z3832786302170-85d050c1148d2106ae383247924aa99c.jpg",
                    "https://i.postimg.cc/44V1K2tY/z3832786594656-a1ea9b5e190e5868db5b93598c0434f2.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'homestay',
                'name' => '101',
                'floor' => '1',
                'price' => '1500000',
                'price_deposit' => '1500000',
                'area' => '10',
                'user_number' => '1',
                'image' => json_encode([
                    "https://i.postimg.cc/X72BX92Z/a2db5d8667ae95f0ccbf.jpg",
                    "https://i.postimg.cc/8z9FmNgN/589927cb1de3efbdb6f2.jpg",
                    "https://i.postimg.cc/FRg7vSdH/deb92a523e7acc24956b.jpg",
                    "https://i.postimg.cc/2yk3S5hF/3cc59e6b4142b31cea53.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'homestay',
                'name' => '201',
                'floor' => '2',
                'price' => '1400000',
                'price_deposit' => '1400000',
                'area' => '10',
                'user_number' => '1',
                'image' => json_encode([
                    "https://i.postimg.cc/zXP3q8BK/IMG-20210606-232955.jpg",
                    "https://i.postimg.cc/2Sby6MbJ/IMG-20210606-232953.jpg",
                    "https://i.postimg.cc/13ktNBDz/20210623-231707.jpg",
                    "https://i.postimg.cc/hGnq7NQG/20210623-231337.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'homestay',
                'name' => '301',
                'floor' => '3',
                'price' => '1600000',
                'price_deposit' => '1600000',
                'area' => '12',
                'user_number' => '1',
                'image' => json_encode([
                    "https://i.postimg.cc/zBJqncvq/IMG-20241017-164320.jpg",
                    "https://i.postimg.cc/sxLyCfc2/IMG-20241017-164318.jpg",
                    "https://i.postimg.cc/NMJvRGZx/IMG-20241017-164316.jpg",
                    "https://i.postimg.cc/rFt2tkjS/IMG-20241017-164312.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '10',
                'room_type'=> 'homestay',
                'name' => '401',
                'floor' => '4',
                'price' => '1200000',
                'price_deposit' => '1200000',
                'area' => '12',
                'user_number' => '1',
                'image' => json_encode([
                    "https://i.postimg.cc/GtRQqvYP/20210224-173224.jpg",
                    "https://i.postimg.cc/63rV2TS8/20210224-173252.jpg",
                    "https://i.postimg.cc/7hq3gw8m/20210224-173326.jpg",
                    "https://i.postimg.cc/901GbKcV/20210224-174045.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/gJRB2zmJ/IMG-1714642856479-1725197438222.jpg",
                    "https://i.postimg.cc/prJGKs9M/IMG-1714642857759-1725197438422.jpg",
                    "https://i.postimg.cc/nV4P8h3S/IMG-1714642851792-1725197437087.jpg",
                    "https://i.postimg.cc/kX7h7PZJ/IMG-1714642850544-1725197436470.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '13',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4400000',
                'price_deposit' => '4400000',
                'area' => '34',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/bJHH5sqQ/z4105200396727-0eec5560bb5b8681004117e18dd6ed8b.jpg",
                    "https://i.postimg.cc/j2xQYtjB/z4105200404891-d154e519ea112589fa0f9d0a9bedba1f.jpg",
                    "https://i.postimg.cc/tCgtrqwx/20221004-204749.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '14',
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '4000000',
                'price_deposit' => '4000000',
                'area' => '32',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/v826ZW24/8b5c339b3e0cc052991d.jpg",
                    "https://i.postimg.cc/hPHz9KBg/IMG-20201015-192650.jpg",
                    "https://i.postimg.cc/jjTDFv2F/IMG-20201015-192652.jpg",
                    "https://i.postimg.cc/d09hPdTt/20201116-152412.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '14',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4500000',
                'price_deposit' => '4500000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/J7FGLRtJ/1.jpg",
                    "https://i.postimg.cc/rpgwYkvD/2.jpg",
                    "https://i.postimg.cc/3RcJYZr7/5e3f8d2a14b6eae8b3a7.jpg",
                    "https://i.postimg.cc/mhxLF2F5/z2164216370437-c94dc7440e89b433c31b23f7861953cf.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '15',
                'room_type'=> 'chung cư mini',
                'name' => '101',
                'floor' => '1',
                'price' => '4400000',
                'price_deposit' => '4400000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/W44dVzmG/3b74ee48bc034b5d1212.jpg",
                    "https://i.postimg.cc/W4fh1VSQ/4b4455730738f066a929.jpg",
                    "https://i.postimg.cc/76FhSNF9/33f390b18c797f272668.jpg",
                    "https://i.postimg.cc/HnbxzyHg/f8ec5ede0c95fbcba284.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '15',
                'room_type'=> 'chung cư mini',
                'name' => '102',
                'floor' => '1',
                'price' => '4600000',
                'price_deposit' => '4600000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/9fSQjpQ2/20201204-075959.jpg",
                    "https://i.postimg.cc/gkdkdrmx/IMG-20201016-224921.jpg",
                    "https://i.postimg.cc/zf98QGxX/IMG-20201016-224928.jpg",
                    "https://i.postimg.cc/LXL2FFWk/IMG-20201016-232730.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '15',
                'room_type'=> 'chung cư mini',
                'name' => '201',
                'floor' => '2',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/c49qjJHy/439083067-122104855076284635-5738752875674131992-n.jpg",
                    "https://i.postimg.cc/QC8PYLZd/439112363-122104855064284635-8934505209451264460-n.jpg",
                    "https://i.postimg.cc/jqcBwjyw/439212141-122104855088284635-4708303086336467081-n.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '15',
                'room_type'=> 'chung cư mini',
                'name' => '202',
                'floor' => '2',
                'price' => '4200000',
                'price_deposit' => '4200000',
                'area' => '35',
                'user_number' => '4',
                'image' => json_encode([
                    "https://i.postimg.cc/JzfFVHCg/455291265-823697549741605-889889667000965131-n.jpg",
                    "https://i.postimg.cc/JzfFVHCg/455291265-823697549741605-889889667000965131-n.jpg",
                    "https://i.postimg.cc/G2QgyMTw/455164305-823697533074940-7316847951718252676-n.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2300000',
                'price_deposit' => '2300000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/SsDVsJHm/1.jpg",
                    "https://i.postimg.cc/1XdHGb9T/3.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '16',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2200000',
                'price_deposit' => '2200000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/8CTh6TRc/1.jpg",
                    "https://i.postimg.cc/GpMq34Wd/20240901-184948.jpg",
                    "https://i.postimg.cc/TwDg8hGk/20240901-185142.jpg",
                    "https://i.postimg.cc/gkDRbCFP/4.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '17',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2300000',
                'price_deposit' => '2300000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/kGCVkcT4/z3914503564419-ce64a123cad30d0552f76b85549aeefa.jpg",
                    "https://i.postimg.cc/pVQ5Kwdn/z3914503579610-74d6927263b23a84cb5bd896d599650e.jpg",
                    "https://i.postimg.cc/5NnHR8L4/z3914503504421-bf4db11ec36c1dcde64778478322435b.jpg",
                    "https://i.postimg.cc/26QyFWCf/z3914503555399-fc5a5bc76e5a3a6161128f4c4e08bddc.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '17',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2600000',
                'price_deposit' => '2600000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.postimg.cc/vZCZJhBs/z3010072338412-30d43c2b8c808bb0b204488d95b49abd.jpg",
                    "https://i.postimg.cc/tCTR7wnb/FB-IMG-1725192795145.jpg",
                    "https://i.postimg.cc/rp6qnpny/FB-IMG-1725192797246.jpg",
                    "https://i.postimg.cc/xCnnQ4VW/z4192207302021-b09e5ebb612ebc5e28e0aab08ba4a75e.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '18',
                'room_type'=> 'trọ thường',
                'name' => '101',
                'floor' => '1',
                'price' => '2600000',
                'price_deposit' => '2600000',
                'area' => '25',
                'user_number' => '3',
                'image' => json_encode([
                    "https://i.postimg.cc/KzGSw3nb/download-6.jpg",
                    "https://i.postimg.cc/zBxZrDjg/z5696831992514-73789697d6e33cb71f9ece2d4745687e.jpg",
                    "https://i.postimg.cc/HnjGsGZP/z5696831997820-3c687688ea87ecdb57752631180b9a57.jpg",
                    "https://i.postimg.cc/Y0P5vXT2/z5696831997798-fbd4e212b4c774969bdd0deeb45c97e6.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
            [
                'house_id'=> '18',
                'room_type'=> 'trọ thường',
                'name' => '102',
                'floor' => '1',
                'price' => '2300000',
                'price_deposit' => '2300000',
                'area' => '25',
                'user_number' => '2',
                'image' => json_encode([
                    "https://i.postimg.cc/FFn5CR1t/d32682b74125bf7be634.jpg",
                    "https://i.postimg.cc/tgz83R8M/2d885bbb962968773138.jpg",
                    "https://i.postimg.cc/B6YyzYS5/FB-IMG-1725242119243.jpg",
                    "https://i.postimg.cc/C5RtpG53/FB-IMG-1725242185055.jpg"
                ]),
                'description' => 'Phòng có điều hòa, nóng lạnh, tủ quần áo, kệ bếp,giường.\nKhông chung chủ,ra vào vân tay\nVệ sinh khép kín\nGần chợ dân sinh\n',
                'status'=> 'available'
            ],
        ]);
    }
}
