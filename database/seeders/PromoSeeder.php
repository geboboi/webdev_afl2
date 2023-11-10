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
            ]);

            DB::table('promos')->insert([
                'percentage' => "10",
                'event_id' => 3,
            ]);

            DB::table('promos')->insert([
                'percentage' => "15",
                'event_id' => 2,
            ]);

            DB::table('promos')->insert([
                'percentage' => "20",
                'event_id' => 1,
            ]);
    }
}
