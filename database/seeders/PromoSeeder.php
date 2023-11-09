<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


            DB::table('promos')->insert([
                'percentage' => "5",
                'event_id' => 3,
                'banner' => "assets/img/banner/banner-03.jpg",
            ]);

            DB::table('promos')->insert([
                'percentage' => "10",
                'event_id' => 3,
                'banner' => "assets/img/banner/banner-04.jpg",
            ]);

            DB::table('promos')->insert([
                'percentage' => "15",
                'event_id' => 2,
                'banner' => "assets/img/banner/banner1.png",
            ]);

            DB::table('promos')->insert([
                'percentage' => "20",
                'event_id' => 1,
                'banner' => "assets/img/banner/banner2.jpg",
            ]);
    }
}
