<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHT_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thêm dữ liệu khách hàng mua cây cảnh
        DB::table('NHT_KHACH_HANG')->insert([
            'nhtMaKhachHang' => 'KH001',
            'nhtHoTenKhachHang' => 'Nguyễn Thị Lan',
            'nhtEmail' => 'lannguyen@gmail.com',
            'nhtMatKhau' => 'lan12345',
            'nhtDienThoai' => '0123456789',
            'nhtDiaChi' => 'Hà Nội - Thanh Xuân',
            'nhtNgayDangKy' => '2024/11/10',
            'nhtTrangThai' => 0, // 0: Chờ Xử Lý, 1: Đang Xử Lý, 2: Hoàn Thành
        ]);

        DB::table('NHT_KHACH_HANG')->insert([
            'nhtMaKhachHang' => 'KH002',
            'nhtHoTenKhachHang' => 'Lê Minh Tuấn',
            'nhtEmail' => 'tuanle@gmail.com',
            'nhtMatKhau' => 'minhtuan@123',
            'nhtDienThoai' => '0903456789',
            'nhtDiaChi' => 'Hải Phòng',
            'nhtNgayDangKy' => '2024/11/22',
            'nhtTrangThai' => 1, // 1: Đang Xử Lý
        ]);

        DB::table('NHT_KHACH_HANG')->insert([
            'nhtMaKhachHang' => 'KH003',
            'nhtHoTenKhachHang' => 'Trần Thị Bích',
            'nhtEmail' => 'bichtran@gmail.com',
            'nhtMatKhau' => 'bich@1234',
            'nhtDienThoai' => '0912345678',
            'nhtDiaChi' => 'Quảng Ninh',
            'nhtNgayDangKy' => '2024/11/25',
            'nhtTrangThai' => 2, // 2: Hoàn Thành
        ]);

        DB::table('NHT_KHACH_HANG')->insert([
            'nhtMaKhachHang' => 'KH004',
            'nhtHoTenKhachHang' => 'Phạm Minh Tuấn',
            'nhtEmail' => 'phamtuan@gmail.com',
            'nhtMatKhau' => 'phamtuan98',
            'nhtDienThoai' => '0934567890',
            'nhtDiaChi' => 'TP Hồ Chí Minh - Quận 3',
            'nhtNgayDangKy' => '2024/12/01',
            'nhtTrangThai' => 0, // 0: Chờ Xử Lý
        ]);
    }
}
