<?php

namespace App\Library;
use Str;

class UserNameGenerator
{
   public static function generate($user){
        $array=explode("@",$user);
        return $array[0];
   }
}
