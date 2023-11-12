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
            'promo_id' => null,
        ]);

        DB::table('products')->insert([
            'name' => "Kroket Ragout",
            'price' => "12000",
            'description' => "Kroket Ragout adalah hidangan yang terdiri dari kroket yang diisi dengan isian berupa ragout. Ini adalah makanan yang umumnya dianggap sebagai camilan atau hidangan pembuka, terutama di beberapa negara Eropa. Kroket adalah bola atau tabung berbentuk silinder yang terbuat dari campuran kentang yang dihaluskan atau puree, terkadang dicampur dengan mentega, susu, dan bumbu-bumbu lainnya. Ragout adalah hidangan krim atau saus yang biasanya terbuat dari daging cincang, sayuran, dan bumbu.",
            'image' => "assets/img/product/5.png",
            'promo_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => "Pastel Tutup Besar",
            'price' => "250000",
            'description' => "Pastel panggang adalah hidangan yang umumnya terdiri dari kulit yang tipis dan renyah yang membalut berbagai macam isian. Proses panggang memberikan pastel ini tekstur luar yang garing sementara memastikan bahwa isian di dalamnya matang. Pastel ini memiliki tempat yang besar sehingga bisa dinikmati oleh banyak orang",
            'image' => "assets/img/product/2.png",
            'promo_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => "Pastel Tutup Kecil",
            'price' => "12000",
            'description' => "Pastel panggang adalah hidangan yang umumnya terdiri dari kulit yang tipis dan renyah yang membalut berbagai macam isian. Proses panggang memberikan pastel ini tekstur luar yang garing sementara memastikan bahwa isian di dalamnya matang. Pastel ini merupakan varian yang lebih kecil sehingga biasanya dinikmati untuk 1 orang",
            'image' => "assets/img/product/1.png",
            'promo_id' => 4,
        ]);
    }
}
