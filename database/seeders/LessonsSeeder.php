<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            [
                'id' => 4,
                'name' => 'Boyah',
                'video' => 'oJsaDwtvXaE',
                'chapter_id' => 4,
                'created_at' => '2021-03-18 08:14:20',
                'updated_at' => '2021-03-18 08:14:20',
            ],
            [
                'id' => 5,
                'name' => 'Chiken Diner',
                'video' => 'zX6LzTDCamk',
                'chapter_id' => 4,
                'created_at' => '2021-03-18 08:16:03',
                'updated_at' => '2021-03-18 08:16:03',
            ],
            [
                'id' => 7,
                'name' => 'Lagi Dan Lagi',
                'video' => 'JSR5ETrEmIU',
                'chapter_id' => 6,
                'created_at' => '2021-03-19 07:23:38',
                'updated_at' => '2021-03-19 07:23:38',
            ],
            [
                'id' => 8,
                'name' => 'Apa Itu Laravel',
                'video' => 'eRZFGSCkAnw',
                'chapter_id' => 8,
                'created_at' => '2021-03-25 06:37:49',
                'updated_at' => '2021-03-25 06:37:49',
            ],
            [
                'id' => 9,
                'name' => 'Apa Itu Mvc',
                'video' => 'rR1Vic4onQ',
                'chapter_id' => 8,
                'created_at' => '2021-03-25 06:39:05',
                'updated_at' => '2021-03-25 06:39:05',
            ],
            [
                'id' => 10,
                'name' => 'Installation Laravel V8.0',
                'video' => 'pUxT0G2j5q8',
                'chapter_id' => 9,
                'created_at' => '2021-03-25 06:40:39',
                'updated_at' => '2021-03-25 06:40:39',
            ],
            [
                'id' => 11,
                'name' => 'Apa Itu Api Dan Res Api',
                'video' => 'N1Q_nZXicro',
                'chapter_id' => 9,
                'created_at' => '2021-03-25 06:42:57',
                'updated_at' => '2021-03-25 06:42:57',
            ],
        ]);
    }
}
