<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'id' => 1,
                'name' => 'Anggular Best Of Peature',
                'certificate' => 0,
                'thumbnail' => 'http://localhost:8080/images/1615613288044.png',
                'type' => 'free',
                'status' => 'published',
                'price' => 0,
                'level' => 'all-level',
                'description' => '<p>lorem ipsum</p>',   
                'mentor_id' => 4,
                'created_at' => '2021-03-09 14:14:31',
                'updated_at' => '2021-03-25 06:19:40',
            ],
            [
                'id' => 10,
                'name' => 'Laravel V8.0 Coda Shop',
                'certificate' => 1,
                'thumbnail' => 'http://localhost:8080/images/1616653091234.jpg',
                'type' => 'premium',
                'status' => 'published',
                'price' => '240000',
                'level' => 'advance',
                'description' => '<p>sangat bagus bagi sisiwa yg mau mengembangkan skill nya lebih baik lagi, <span style="color: #2dc26b;">with spirit of learning</span></p>',   
                'mentor_id' => 3,
                'created_at' => '2021-03-25 06:18:11',
                'updated_at' => '2021-03-25 06:19:15',
            ],
            [
                'id' => 5,
                'name' => 'Hanya Percobaan',
                'certificate' => 0,
                'thumbnail' => 'http://localhost:8080/images/1615611221235.png',
                'type' => 'free',
                'status' => 'published',
                'price' => 0,
                'level' => 'all-level',
                'description' => '<p><strong>MANTAP</strong></p>
                <ul class="tox-checklist">
                <li class="tox-checklist--checked">Bagian Pertama</li>
                <li class="tox-checklist--checked">Bagian Kedua</li>
                <li class="tox-checklist--checked">Bagian Ketiga&nbsp;</li>
                <li class="tox-checklist--checked">Bagian Ke Empat</li>
                </ul>',   
                'mentor_id' => 4,
                'created_at' => '2021-03-11 09:43:09',
                'updated_at' => '2021-03-18 09:09:38',
            ],
            [
                'id' => 6,
                'name' => 'Dasar Dasar Implementasi Java',
                'certificate' => 1,
                'thumbnail' => 'http://localhost:8080/images/1615614534562.png',
                'type' => 'premium',
                'status' => 'published',
                'price' => '290000',
                'level' => 'beginner',
                'description' => '<p><strong>MANTAP</strong></p>
                <ul class="tox-checklist">
                <li class="tox-checklist--checked">Bagian Pertama</li>
                <li class="tox-checklist--checked">Bagian Kedua</li>
                </ul>',   
                'mentor_id' => 5,
                'created_at' => '2021-03-11 09:47:19',
                'updated_at' => '2021-03-13 05:49:53',
            ],
            [
                'id' => 2,
                'name' => 'React Js About Modular',
                'certificate' => 0,
                'thumbnail' => 'http://localhost:8080/images/1615613112112.jpg',
                'type' => 'free',
                'status' => 'published',
                'price' => 0,
                'level' => 'intermediate',
                'description' => '<p>lorem ipsum two second</p>',   
                'mentor_id' => 3,
                'created_at' => '2021-03-09 11:12:38',
                'updated_at' => '2021-03-13 05:25:12',
            ]
        ]);
    }
}
