<?php

namespace App\Library;
use Str;
use App\Models\Wallet;

class Balance
{
   public static function transferBalance($sender_id, $receiver_id, $amount){
         if(self::sufficientBalance($sender_id,$amount)){
             Wallet::where('user_id',$sender_id)->update([
                 'amount' =>$sender->amount-$amount
             ]);
             Wallet::where('user_id',$receiver_id)->update([
                 'amount' =>$reciever->amount+$amount
             ]);
             return ['status'=>'success','msg'=>"successfully amount transfered to userID $reciever->user_id "];
         }else{
             return ['status' => 'error','msg' => 'insufficient balance'];
         }
   }

   public static function Balance($user_id){
        $wallet=Wallet::where('user_id',$user_id)->first();
        return $wallet->amount;
   }
   public static function sufficientBalance($user_id,$needed_amount){
        $amount=self::Balance($user_id);
        if($amount>=$needed_amount){
            return True;
        }else{
            return False;
        }
        
   }

}
