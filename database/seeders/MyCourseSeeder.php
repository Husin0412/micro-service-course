<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class MyCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_courses')->insert([
            [
                'id' => 1,
                'course_id' => 1,
                'user_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'course_id' => 2,
                'user_id' => 4,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
