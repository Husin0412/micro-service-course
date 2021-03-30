<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            MentorsSeeder::class,
            CoursesSeeder::class,
            ChaptersSeeder::class,
            LessonsSeeder::class,
            ImageCoursesSeeder::class,
            MyCourseSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
