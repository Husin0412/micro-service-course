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
            ChaptersSeeder::class,
            CoursesSeeder::class,
            ImageCoursesSeeder::class,
            LessonsSeeder::class,
            MentorsSeeder::class,
            MyCourseSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
