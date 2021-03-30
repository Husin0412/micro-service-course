<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImageCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_courses')->insert([
            [
                'id' => 3,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885262511.png',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 4,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885262767.jpg',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 5,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885263021.jpg',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 6,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885263312.jpg',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 7,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885263572.jpg',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 8,
                'course_id' => 1,
                'image' => 'http://localhost:8080/images/1615885263827.png',
                'created_at' => '2021-03-16 09:01:02',
                'updated_at' => '2021-03-16 09:01:02',
            ],
            [
                'id' => 14,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653242437.jpg',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],
            [
                'id' => 15,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653242725.png',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],
            [
                'id' => 16,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653242979.jpg',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],
            [
                'id' => 17,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653243262.png',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],
            [
                'id' => 18,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653243526.png',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],
            [
                'id' => 19,
                'course_id' => 10,
                'image' => 'http://localhost:8080/images/1616653243798.jpg',
                'created_at' => '2021-03-25 06:20:43',
                'updated_at' => '2021-03-25 06:20:43',
            ],

        ]);
    }
}
