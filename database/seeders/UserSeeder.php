<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ReferalCode;
use App\Models\Matrix;
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
        $user=User::create([
            'username'=>'skpandit',
            'email'=>'skpandit@gmail.com',
            'password'=>Hash::make('santosh'),
            'fullname'=>'sk pandit',
            'phone_no'=>'9823630507',
            'membershipDate'=>'2021-01-05',
            'credit_card_id'=>1,
            'status'=>'active',
        ]);
        ReferalCode::create([
            'user_id'=>$user->id,
            'referal_code' =>'12345',

       ]);
       Matrix::create([
           'user_id'=>$user->id,
           'level' =>0
       ]);
    }
}
