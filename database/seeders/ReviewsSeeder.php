<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'id' => 1,
                'user_id' => 4,
                'course_id' => 1,
                'rating' => 4,
                'note' => 'sangat terbantu sekali',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'user_id' => 7,
                'course_id' => 1,
                'rating' => 3,
                'note' => 'ini kelas keren bro',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
