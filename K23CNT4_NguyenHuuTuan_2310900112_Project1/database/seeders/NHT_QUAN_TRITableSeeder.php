<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NHT_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nhtMaKau = md5("123456@");  
        DB::table('NHT_QUAN_TRI')->insert([
            'nhtTaiKhoan'=>"chungtrinhj@gmail.com",
            'nhtMatKhau'=> $nhtMaKau,
            'nhtTrangThai'=>0
         ]); 
        DB::table('NHT_QUAN_TRI')->insert([
            'nhtTaiKhoan'=>"0978611889",
            'nhtMatKhau'=> $nhtMaKau,
            'nhtTrangThai'=>0
         ]);
    }
}
