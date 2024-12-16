<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhtVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhtvattu')->insert([
            'nhtMaVTu'=>'DD01',
            'nhtTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nhtDvTinh'=>'Bộ',
            'nhtPhanTram'=>40,
        ]);
        DB::table('nhtvattu')->insert([
            'nhtMaVTu'=>'DD01',
            'nhtTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'nhtDvTinh'=>'Bộ',
            'nhtPhanTram'=>50,
        ]);
    }
}
