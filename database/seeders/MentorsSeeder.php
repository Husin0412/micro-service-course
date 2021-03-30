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
            ],
            [    
                'id' => 3,
                'name' => 'Rosidin Anwar',
                'profile' => 'http://localhost:8080/images/1615261895218.jpg',
                'email' => 'rosidin@yopmail.com',
                'profession' => 'Pembasmi Hama Kota',
                'created_at' => Carbon::now()
            ],
            [    
                'id' => 4,
                'name' => 'Rismayati',
                'profile' => 'http://localhost:8080/images/1615261985240.jpg',
                'email' => 'risma@yopmail.com',
                'profession' => 'Dosen IT Di Institut Of Technologi Bangkok',
                'created_at' => Carbon::now()
            ],
            [    
                'id' => 5,
                'name' => 'Ismanto',
                'profile' => 'http://localhost:8080/images/1615613512660.jpg',
                'email' => 'ismanto@yopmail.com',
                'profession' => 'developer front-end coach',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
