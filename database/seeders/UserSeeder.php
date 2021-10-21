<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'skpandit',
            'email'=>'skpandit@gmail.com',
            'password'=>Hash::make('santosh'),
            'fullname'=>'sk pandit',
            'phone_no'=>'9823630507',
            'membershipDate'=>'2021-01-05',
            'credit_card_id'=>1,
            'status'=>'active',
        ]);
    }
}
