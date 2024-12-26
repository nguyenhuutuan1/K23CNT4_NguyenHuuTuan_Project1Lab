<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHT_HOA_DONTableSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('NHT_HOA_DON')->insert([
            'nhtMaHoaDon' => 'HD001',
            'nhtMaKhachHang' => 1,
            'nhtNgayHoaDon' => '2024/12/12',
            'nhtNgayNhan' => '2024/12/12',
            'nhtHoTenKhachHang' => 'Nguyễn Thị Lan',
            'nhtEmail' => 'lannguyen@gmail.com',
            'nhtDienThoai' => '0123456789',
            'nhtDiaChi' => 'Hà Nội - Thanh Xuân',
            'nhtTongGiaTri' => '790000',
            'nhtTrangThai' => 2, 
        ]);

        DB::table('NHT_HOA_DON')->insert([
            'nhtMaHoaDon' => 'HD002',
            'nhtMaKhachHang' => 2,
            'nhtNgayHoaDon' => '2024/12/20',
            'nhtNgayNhan' => '2024/12/21',
            'nhtHoTenKhachHang' => 'Lê Minh Tuấn',
            'nhtEmail' => 'tuanle@gmail.com',
            'nhtDienThoai' => '0903456789',
            'nhtDiaChi' => 'Hải Phòng',
            'nhtTongGiaTri' => '125000',
            'nhtTrangThai' => 0, 
        ]);

        DB::table('NHT_HOA_DON')->insert([
            'nhtMaHoaDon' => 'HD003',
            'nhtMaKhachHang' => 3,
            'nhtNgayHoaDon' => '2024/12/17',
            'nhtNgayNhan' => '2024/12/17',
            'nhtHoTenKhachHang' => 'Trần Thị Bích',
            'nhtEmail' => 'bichtran@gmail.com',
            'nhtDienThoai' => '0912345678',
            'nhtDiaChi' => 'Quảng Ninh',
            'nhtTongGiaTri' => '999000',
            'nhtTrangThai' => 1, 
        ]);

        DB::table('NHT_HOA_DON')->insert([
            'nhtMaHoaDon' => 'HD004',
            'nhtMaKhachHang' => 1,
            'nhtNgayHoaDon' => '2024/12/12',
            'nhtNgayNhan' => '2024/12/12',
            'nhtHoTenKhachHang' => 'Nguyễn Thị Lan',
            'nhtEnhtmail' => 'lannguyen@gmail.com',
            'nhtThoai' => '0123456789',
            'nhtDiaChi' => 'Hà Nội - Thanh Xuân',
            'nhtTongGiaTri' => '660000',
            'nhtTrangThai' => 1, 
        ]);

        DB::table('NHT_HOA_DON')->insert([
            'nhtMaHoaDon' => 'HD005',
            'nhtMaKhachHang' => 4,
            'nhtNgayHoaDon' => '2024/12/03',
            'nhtNgayNhan' => '2024/12/04',
            'nhtHoTenKhachHang' => 'Phạm Minh Tuấn',
            'nhtEmail' => 'phamtuan@gmail.com',
            'nhtDienThoai' => '0934567890',
            'nhtDiaChi' => 'TP Hồ Chí Minh - Quận 3',
            'nhtTongGiaTri' => '777999',
            'nhtTrangThai' => 1, 
        ]);
    }
}
