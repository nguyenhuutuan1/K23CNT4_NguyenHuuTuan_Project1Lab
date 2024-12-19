<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHT_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NHT_LOAI_SAN_PHAM')->insert([
            'nhtMaLoai'=> "L001",
            'nhtTenLoai'=>"Cây cảnh văn phòng",
            'nhtTrangThai'=>0
        ]);
        DB::table('NHT_LOAI_SAN_PHAM')->insert([
            'nhtMaLoai'=> "L002",
            'nhtTenLoai'=>"Cây để bàn",
            'nhtTrangThai'=>0
        ]);
        DB::table('NHT_LOAI_SAN_PHAM')->insert([
            'nhtMaLoai'=> "L003",
            'nhtTenLoai'=>"Cây phong thủy",
            'nhtTrangThai'=>0
        ]);
        DB::table('NHT_LOAI_SAN_PHAM')->insert([
            'nhtMaLoai'=> "L004",
            'nhtTenLoai'=>"Cây thủy canh",
            'nhtTrangThai'=>0
        ]);
    }
}
