<?php

namespace App\Library;
use Str;

class ReferalCodeGenerator
{
   public static function generate($user_id){
        return $user_id."R".Str::random(4);
   }
}
