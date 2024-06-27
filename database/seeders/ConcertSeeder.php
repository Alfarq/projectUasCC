<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('concerts')->insert([
            [
                'name' => 'Jakarta Fair Music Concert',
                'organizer' => 'Jakarta Fair',
                'guest_star' => 'Nadin Amizah',
                'concert_date' => '2024-07-01',
                'locations' => 'Gambir Expo, Jiexpo Kemayoran, Jakarta, Indonesia',
                'description' => 'Penantian panjang akan line up musisi yang tampil di panggung konser musik Jakarta Fair Kemayoran 2024 bulan Juli tuntas sudah. JFK resmi mengumumkan line up musisi yang akan tampil di panggung konser musik bulan Juli mendatang.',
                'image' => 'img/jakartafair.jpg',
                'link_ticket' => 'https://www.loket.com/event/jakarta-fair-kemayoran-2024_I4b4D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambah data lainnya jika perlu
        ]);
    }
}
