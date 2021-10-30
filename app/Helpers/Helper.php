<?php

use App\Models\Cart;

function totalCartItems(){
	if(Auth::check()){
		$user_id = Auth::user()->id;
		$totalCartItems = Cart::where('user_id',$user_id)->sum('quantity');
	}else{
		$sessionID = Session::get('sessionID');
		$totalCartItems = Cart::where('sessionID',$sessionID)->sum('quantity');

	}
	return $totalCartItems;
}

?>