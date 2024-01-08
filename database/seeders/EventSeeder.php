<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('events')->insert([
                'event_name' => "Natal",
                'description' => "Natal adalah sebuah perayaan agama yang dirayakan oleh umat Kristen di seluruh dunia untuk memperingati kelahiran Yesus Kristus, Putra Allah. Perayaan ini jatuh pada tanggal 25 Desember setiap tahun. Natal dihiasi dengan hiasan seperti pohon Natal, lampu-lampu, dan berbagai dekorasi. Selama Natal, orang-orang biasanya berkumpul bersama keluarga dan teman-teman, memberikan hadiah, menyanyikan lagu-lagu Natal, dan mengikuti ibadah gereja khusus.",
                'start_date' => "2023-12-11",
                'end_date' => "2023-12-31",
                'banner' => 'images/events/banner/christmas-promo.svg'

            ]);

            DB::table('events')->insert([
                'event_name' => "Tahun Baru",
                'description' => "Tahun Baru adalah perayaan global yang dirayakan oleh berbagai budaya di seluruh dunia untuk menyambut awal tahun yang baru dalam kalender Gregorian. Perayaan ini jatuh pada tanggal 1 Januari setiap tahunnya. Tahun Baru sering kali dirayakan dengan pesta, kembang api, acara-acara khusus, dan berbagai kegiatan hiburan.",
                'start_date' => "2024-01-01",
                'end_date' => "2024-01-08",
                'banner' => 'images/events/banner/newyear-promo.svg'
            ]);

            DB::table('events')->insert([
                'event_name' => "Tahun Baru Imlek",
                'description' => "Tahun Baru Imlek, juga dikenal sebagai Tahun Baru Lunar atau Tahun Baru Tionghoa, adalah perayaan tradisional yang dirayakan oleh masyarakat Tionghoa di seluruh dunia. Perayaan ini didasarkan pada penanggalan lunar dan biasanya jatuh pada akhir Januari atau awal Februari setiap tahun, bergantung pada siklus bulan. Tahun Baru Imlek menandai awal dari tahun baru dalam kalender lunar Tionghoa.",
                'start_date' => "2024-02-03",
                'end_date' => "2024-02-17",
                'banner' => 'images/events/banner/cny-promo.svg'
            ]);
    }
}
