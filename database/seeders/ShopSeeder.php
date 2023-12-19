<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            'name' => 'Mich Store',
            'address' => 'Jl. Penjaringan Sari blok I no 15',
            'operational_time' => '10.00 - 18.00 WIB',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.265257919993!2d112.78691889999999!3d-7.324074000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa955574ee7f%3A0xf1737a0d2d8d8cb0!2sJl.%20Penjaringan%20Asri%20X%20No.30%2C%20Penjaringan%20Sari%2C%20Kec.%20Rungkut%2C%20Surabaya%2C%20Jawa%20Timur%2060297!5e0!3m2!1sen!2sid!4v1702889414989!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ]);
    }
}
