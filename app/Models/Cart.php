<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Session;
use Auth;

class Cart extends Model
{
    use HasFactory;
    
    public static function userCartItems(){
    	if(Auth::check()){
    		$userCartItems = Cart::with(['product'=>function($query){
    			$query->select('id','product_name','product_code','product_image','product_price');
    		}])->where('user_id',Auth::guard('agent')->user()->id)->orderBy('id','desc')->get()->toArray();
    	}else{
    		$userCartItems = Cart::with(['product'=>function($query){
    			$query->select('id','product_name','product_code','product_image','product_price');
    		}])->where('sessionID',Session::get('sessionID'))->orderBy('id','desc')->get()->toArray();
    	}
    	return $userCartItems;
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
