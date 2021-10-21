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
        	['id'=>1,'username'=>'admin','fullName'=>'admin','role'=>'Admin','phone'=>'9841782665','email'=>'admin@gmail.com','password'=>Hash::make('admin'),'status'=>1,'country_id'=>1,'state'=>'1','city'=>'brt','zip_code'=>'111','street_address'=>'brt'],
            ['id'=>2,'username'=>'santosh','fullName'=>'santosh','role'=>'Admin','phone'=>'9841782665','email'=>'santosh@gmail.com','password'=>Hash::make('santosh'),'status'=>1,'country_id'=>1,'state'=>'1','city'=>'brt','zip_code'=>'111','street_address'=>'brt'],
        ];
        DB::table('admins')->insert($adminRecords);
    }
}
