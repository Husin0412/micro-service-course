<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            [
                'id' => 9,
                'name' => 'Persiapan Dan Tool',
                'course_id' => 10,
                'created_at' => '2021-03-25 06:33:30',
                'updated_at' => '2021-03-25 06:33:30',
            ],
            [
                'id' => 8,
                'name' => 'Sesi Pengenalan',
                'course_id' => 10,
                'created_at' => '2021-03-25 06:22:28',
                'updated_at' => '2021-03-25 06:22:28',
            ],
            [
                'id' => 6,
                'name' => 'Test Lagi Ya Sabar',
                'course_id' => 5,
                'created_at' => '2021-03-18 07:51:16',
                'updated_at' => '2021-03-18 07:51:16',
            ],
            [
                'id' => 4,
                'name' => 'Test Dulu Ya Ok',
                'course_id' => 5,
                'created_at' => '2021-03-18 05:09:01',
                'updated_at' => '2021-03-18 07:40:20',
            ]
        ]);
    }
}
