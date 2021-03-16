<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class MentorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentors')->insert([
            [    
                'id' => 1,
                'name' => 'Mamat Ismanto',
                'profile' => 'https://4.bp.blogspot.com/-5DfOpnM4Lqc/XGQy6MZypLI/AAAAAAAAACQ/Ml-g7acjdb4AZcAVkjQrL3g3wh2ZVTNAgCPcBGAYYCw/s1600/KEPALA%2BDESA%2B%25282%2529.JPG',
                'email' => 'MamatIsmanto@yopmail.com',
                'profession' => 'Pendekar Pedang No 1 Di Dunia',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
