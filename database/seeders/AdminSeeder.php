<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
        	['id'=>1,'name'=>'admin','role'=>'Admin','mobile'=>'9841782665','email'=>'admin@gmail.com','password'=>'$2y$10$l6s/VTvAjKG5ngWgTOue7Ojy9eZ6bUEWV2jAiJpO67NxO/DuSoHZS','profile_image'=>'','status'=>1],
            ['id'=>2,'name'=>'santosh','role'=>'Admin','mobile'=>'9841782665','email'=>'santosh@gmail.com','password'=>Hash::make('santosh'),'profile_image'=>'','status'=>1],
        ];
        DB::table('admins')->insert($adminRecords);
    }
}
