<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(){
    	$sliders = Slider::where('status',1)->get();
    	$products = Product::where('status',1)->get();
    	return view('front.index')->with(compact('sliders','products'));
    }
}
