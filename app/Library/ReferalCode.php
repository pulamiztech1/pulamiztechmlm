<?php

namespace App\Library;
use Str;

class ReferalCode
{
   public function generateReferalCode($user_id){
        return $user_id."R".Str::random(4);
   }
}
