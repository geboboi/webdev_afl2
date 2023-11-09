<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
<<<<<<< Updated upstream
            ''
=======
            'name' => "Kroket Ayam",
            'price' => "12000",
            'description' => "Kroket Ayam adalah camilan yang populer dan lezat yang berasal dari Indonesia. Ini adalah varian dari kroket yang terbuat dari daging ayam yang dimasak dengan bumbu-bumbu khusus, kemudian dicampur dengan kentang tumbuk, dan dibentuk menjadi bola atau silinder sebelum digoreng hingga kecokelatan dan renyah. Kroket Ayam biasanya memiliki lapisan luar yang renyah dan garing, sementara bagian dalamnya sangat lembut dan penuh dengan rasa ayam yang gurih.",
            'image' => "assets/img/product/3.png",
            'promo_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Lumpia",
            'price' => "12000",
            'description' => "Lumpia adalah salah satu makanan ringan yang terkenal di berbagai negara Asia, termasuk Indonesia, Filipina, dan Tiongkok. Di Indonesia, lumpia sering dianggap sebagai salah satu camilan yang populer. Ada dua jenis lumpia yang umumnya dikenal, yaitu lumpia basah dan lumpia goreng.",
            'image' => "assets/img/product/4.png",
            'promo_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Kroket Rogut",
            'price' => "12000",
            'description' => "Saya mohon maaf, tetapi hingga pengetahuan saya yang terakhir pada Januari 2022, saya tidak memiliki informasi tentang Kroket Rogut. Sepertinya ini bukanlah hidangan yang dikenal secara umum atau populer di kalangan masyarakat pada saat itu. Jika Kroket Rogut adalah variasi lokal atau inovasi kuliner baru yang muncul setelah tanggal pembaruan pengetahuan saya, saya tidak memiliki akses ke informasi tersebut.",
            'image' => "assets/img/product/5.png",
            'promo_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => "Pastel Tutup Besar",
            'price' => "250000",
            'description' => "Saya mohon maaf, tetapi hingga pengetahuan saya yang terakhir pada Januari 2022, saya tidak memiliki informasi tentang Kroket Rogut. Sepertinya ini bukanlah hidangan yang dikenal secara umum atau populer di kalangan masyarakat pada saat itu. Jika Kroket Rogut adalah variasi lokal atau inovasi kuliner baru yang muncul setelah tanggal pembaruan pengetahuan saya, saya tidak memiliki akses ke informasi tersebut.",
            'image' => "assets/img/product/2.png",
            'promo_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => "Pastel Tutup Kecil",
            'price' => "12000",
            'description' => "Saya mohon maaf, tetapi hingga pengetahuan saya yang terakhir pada Januari 2022, saya tidak memiliki informasi tentang Kroket Rogut. Sepertinya ini bukanlah hidangan yang dikenal secara umum atau populer di kalangan masyarakat pada saat itu. Jika Kroket Rogut adalah variasi lokal atau inovasi kuliner baru yang muncul setelah tanggal pembaruan pengetahuan saya, saya tidak memiliki akses ke informasi tersebut.",
            'image' => "assets/img/product/1.png",
            'promo_id' => 4,
>>>>>>> Stashed changes
        ]);
    }
}
