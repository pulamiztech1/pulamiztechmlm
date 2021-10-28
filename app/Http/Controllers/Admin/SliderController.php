<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Session;

class SliderController extends Controller
{
    public function viewSliders(){
    	Session::put('page','sliders');
    	$sliders = Slider::get();
    	//$sliders = json_decode(json_encode($sliders));
    	//dd($sliders);die;
        return view('admin.sliders.view_sliders')->with(compact('sliders'));
    } 
    
    public function updateSliderStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		//dd($data);die;
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}    		
    		Slider::where('id',$data['slider_id'])->update(['status'=>$status]);
    		return response()->json(['status'=>$status,'slider_id'=>$data['slider_id']]);
    	}
    }

    public function addEditSlider(Request $request, $id=null){
    	if($id==""){
    		//Add Tour
    		$title = "Add Slider";
    		$slider = new Slider;
    		$sliderdata = array();
            $message = "Slider added successfully!";   		
    	}else{
    		//Edit Tour
    		$title = "Edit Slider";
    		$sliderdata = Slider::where('id',$id)->first();
    		$sliderdata = json_decode(json_encode($sliderdata),true);
            
            $slider = Slider::find($id);
            $message = "Slider updated successfully!";
    	}
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//dd($data);die;
    		$rules = [
                'slider_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ];
            $customMessages = [                
                'slider_image.image' => 'Valid image is required',
                'slider_image.mimes' => 'Only jpeg,png,gif,svg format are allowed',
                'slider_image.max' => 'Maximum image size is 1024',                
            ];
            $this->validate($request,$rules,$customMessages);

            //Upload Hotel Category Image
            if($request->hasFile('slider_image')){
                $image_tmp = $request->file('slider_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Genereate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $sliderImagePath = public_path('images/backend_images/sliders/'.$imageName);
                    Image::make($image_tmp)->resize(1600,575)->save($sliderImagePath);

                	$slider->slider_image = $imageName;
            	}
            }
    		
    		if(empty($data['slider_image'])){
    			$data['slider_image']="";
    		}
    		$slider->slider_text_one = $data['slider_text_one'];
    		$slider->slider_text_two = $data['slider_text_two'];
    		$slider->slider_text_three = $data['slider_text_three'];	
    		$slider->status = 1;
    		$slider->save();

    		Session::flash('success_message',$message);
    		return redirect('admin/view-sliders');
    	}
    	return view('admin.sliders.add_edit_slider')->with(compact('title','sliderdata'));
    }

    public function deleteSliderImage($id){
        //Get Category Image
        $sliderImage = Slider::select('slider_image')->where('id',$id)->first();

        //Get Category Image path
        $sliderImagePath = public_path('images/backend_images/sliders/');

        //Delete Category Image folder if exists
        if(file_exists($sliderImagePath.$sliderImage->slider_image)){
            unlink($sliderImagePath.$sliderImage->slider_image);
        }

        //Delete Category Image from categories table
        Slider::where('id',$id)->update(['slider_image'=>'']);

        $message = 'Slider image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }    

    public function deleteSlider($id){
        //Delete Category
        Slider::where('id',$id)->delete();
        $message = 'Slider image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }  

    
}
