<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Auth;

class ProductsController extends Controller
{
	public function productsListing(){
		$products = Product::where('status', 1)->get();
		return view('front.pages.products_listing')->with(compact('products'));
	}    

    public function productDetails($slug){
    	$productCount = Product::where(['slug'=>$slug,'status'=>1])->count();
        if($productCount==0){ 
            abort(404);
        }else{
        $productDetails = Product::where('status',1)->where('slug',$slug)->first();
        //$productDetails = json_decode(json_encode($productDetails));
        //echo "<pre>"; print_r($productDetails); die;

            $meta_title = $productDetails->tour_title;
            $meta_description = $productDetails->description;
            $meta_keywords = $productDetails->tour_title; 
        }
   		return view('front.pages.product_details')->with(compact('productDetails'));
    }

    public function addToCart(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();

    		//dd($data);die;

    		$sessionID = Session::get('sessionID');
    		if(empty($sessionID)){
    			$sessionID = Session::getId();
    			Session::put('sessionID', $sessionID);
    		}
    		//check product already exists in cart
    		if(Auth::check()){
    			//user is logged in
    			$countProducts = Cart::where(['product_id'=>$data['product_id'],'user_id'=>Auth::guard('agent')->user()->id])->count();
    		}else{
    			//user is not logged in
    			$countProducts = Cart::where(['product_id'=>$data['product_id'],'sessionID'=>Session::get('sessionID')])->count();

    		}
    		
    		if($countProducts>0){
    			$message = "Product already exists in cart";
    			session::flash('error_message',$message);
    			return redirect()->back();
    		}

            if(Auth::check()){
                $user_id = Auth::guard('agent')->user()->id;                
            }else{
                $user_id = 0;
            }

    		//Save product in cart   		

    		$cart = new Cart;
            $cart->sessionID = $sessionID;
    		$cart->user_id = $user_id;
    		$cart->product_id = $data['product_id'];
    		$cart->quantity = $data['quantity'];
    		$cart->save();

    		$message = "Product has been added in cart!";
    		session::flash('success_message',$message);
    		return redirect()->back();
    	}
    }

    public function cart(){
    	$userCartItems = Cart::userCartItems();
    	//echo "<pre>"; print_r($userCartItems);die;
    	return view('front.pages.cart')->with(compact('userCartItems'));
    }

    public function deleteCartItem(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		//dd($data);die;
    		Cart::where('id',$data['cartid'])->delete();
    		$userCartItems = Cart::userCartItems();
    		return response()->json([
    			'view'=>(String)View::make('front.pages.cart')->with(compact('userCartItems'))
    		]);
    	}
    }
}
