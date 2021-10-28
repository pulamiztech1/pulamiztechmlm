<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Image;
use Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function viewProducts(){
    	Session::put('page','products');
    	$products = Product::get();
    	//$tours = json_decode(json_encode($tours));
    	//dd($tours);die;
        return view('admin.products.view_products')->with(compact('products'));
    } 
    
    public function updateProductStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		//dd($data);die;
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}    		
    		Product::where('id',$data['product_id'])->update(['status'=>$status]);
    		return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
    	}
    }

    public function addEditProduct(Request $request, $id=null){
    	if($id==""){
    		//Add Tour
    		$title = "Add Product";
    		$product = new Product;
    		$productdata = array();
            $message = "Product added successfully!";   		
    	}else{
    		//Edit Tour
    		$title = "Edit Product";
    		$productdata = Product::where('id',$id)->first();
    		$productdata = json_decode(json_encode($productdata),true);
            
            $product = Product::find($id);
            $message = "Product updated successfully!";
    	}
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//dd($data);die;
    		$rules = [
                'product_name' => 'required',
                'product_code' => 'required',
                'product_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'product_cost'  => 'required',
                'product_price'  => 'required',                
                'product_description'  => 'required',                
            ];
            $customMessages = [
                'product_name.required' => 'Product is required',
                'product_code.required' => 'Product code is required',
                'product_image.image' => 'Valid image is required',
                'product_image.mimes' => 'Only jpeg,png,gif,svg format are allowed',
                'product_image.max' => 'Maximum image size is 1024',
                'product_cost.required' => 'Product cost price is required',
                'product_price.required' => 'Product price is required',                
                'product_description.required' => 'Product description is required',                
            ];
            $this->validate($request,$rules,$customMessages);

            //Upload Hotel Category Image
            if($request->hasFile('product_image')){
                $image_tmp = $request->file('product_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Genereate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $propertyBannerPath = public_path('images/backend_images/products/'.$imageName);
                    Image::make($image_tmp)->resize(270,343)->save($propertyBannerPath);

                	$product->product_image = $imageName;
            	}
            }
    		if(empty($data['product_image'])){
    			$data['product_image']="";
    		}
    		$product->product_name = $data['product_name'];
    		$product->product_code = $data['product_code'];
            $product->product_cost = $data['product_cost'];        
            $product->product_price = $data['product_price'];        
            $product->product_description = $data['product_description'];
            $product->slug = Str::random(10);
    		$product->status = 1;            
    		$product->save();

    		Session::flash('success_message',$message);
    		return redirect('admin/view-products');
    	}
    	return view('admin.products.add_edit_product')->with(compact('title','productdata'));
    }

    public function deleteProductImage($id){
        //Get product Image
        $productImage = Product::select('product_image')->where('id',$id)->first();

        //Get product Image path
        $productImagePath = public_path('images/backend_images/products/');

        //Delete product Image folder if exists
        if(file_exists($productImagePath.$productImage->product_image)){
            unlink($productImagePath.$productImage->product_image);
        }

        //Delete product Image from categories table
        Product::where('id',$id)->update(['product_image'=>'']);

        $message = 'Product image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }    

    public function deleteProduct($id){
        //Delete Category
        Product::where('id',$id)->delete();
        $message = 'Product has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }
    public function productDetails($id){
        $productDetails = Product::where('id',$id)->first();
        //$productDetails = json_decode(json_encode($productDetails));
        //dd($productDetails);die;
        return view('admin.products.view_product_details')->with(compact('productDetails'));
    }    

    
}
