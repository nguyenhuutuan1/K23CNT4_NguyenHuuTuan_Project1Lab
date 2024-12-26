<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHT_CT_HOA_DONTableSeeder.php extends Seeder
{
   
    public function run(): void
    {
        DB::table('NHT_CT_HOA_DON')->insert([
            'nhtHoaDonID' => 1,
            'nhtSanPhamID' => 2, 
            'nhtSoLuongMua' => 15, 
            'nhtDonGiaMua' => 599000, 
            'nhtThanhTien' => 599000 * 15, 
            'nhtTrangThai' => 0, 
        ]);

        DB::table('NHT_CT_HOA_DON')->insert([
            'nhtHoaDonID' => 2,
            'nhtSanPhamID' => 3, 
            'nhtSoLuongMua' => 10, 
            'nhtDonGiaMua' => 450000, 
            'nhtThanhTien' => 450000 * 10, 
            'nhtTrangThai' => 0, 
        ]);

        DB::table('NHT_CT_HOA_DON')->insert([
            'nhtHoaDonID' => 3,
            'nhtSanPhamID' => 4, 
            'nhtSoLuongMua' => 8, 
            'nhtDonGiaMua' => 500000, 
            'nhtThanhTien' => 500000 * 8, 
            'nhtTrangThai' => 0, 
        ]);

        DB::table('NHT_CT_HOA_DON')->insert([
            'nhtHoaDonID' => 4,
            'nhtSanPhamID' => 6, 
            'nhtSoLuongMua' => 5, 
            'nhtDonGiaMua' => 350000, 
            'nhtThanhTien' => 350000 * 5, 
            'nhtTrangThai' => 0, 
        ]);
    }
}
