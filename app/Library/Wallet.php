<?php

namespace App\Library;
use Str;
use App\Models\Wallet as myWallet;

class Wallet
{
   public static function transferBalance($from, $to, $amount){
         $sender=myWallet::where('user_id',$from)->first();
         $reciever=myWallet::where('user_id',$to)->first();
         if($sender->amount>=$amount){
             $sender->update([
                 'amount' =>$sender->amount-$amount
             ]);
             $reciever->update([
                 'amount' =>$reciever->amount+$amount
             ]);
             return ['status'=>'success','msg'=>"successfully amount transfered to userID $reciever->user_id "];
         }else{
             return ['status' => 'error','msg' => 'insufficient balance'];
         }
   }

   public static function myBalance($user_id){
        $wallet=mywallet::where('user_id',$user_id)->first();
        return $wallet->amount;
   }

}
