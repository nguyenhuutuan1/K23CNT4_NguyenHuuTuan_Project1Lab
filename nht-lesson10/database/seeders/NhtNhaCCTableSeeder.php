<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class NhtNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('nhtnhacc')->insert([
                    'nhtMaNCC'=>$faker->uuid(),
                    // 'MaNCC'=>$faker->word(15),
                    'nhtTenNCC'=>$faker->sentence(5),
                    'nhtDiachi'=>$faker->address(),
                    'nhtDienthoai'=>$faker->phoneNumber(10),
                    'nhtemail'=>$faker->email(),
                    'nhtstatus'=>$faker->boolean()
            ]);
        }
    }
}
