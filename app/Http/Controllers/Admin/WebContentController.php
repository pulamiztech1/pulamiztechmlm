<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebContent;
use Image;
use Session;
use Illuminate\Support\Str;
use Auth;

class WebContentController extends Controller
{  

    public function viewWebContents(){
    	Session::put('page','webcontents');
    	$webContents = WebContent::get();
    	//$webContents = json_decode(json_encode($webContents));
    	//dd($webContents);die;
        return view('admin.webContents.view_web_contents')->with(compact('webContents'));
    } 
    
    public function updateWebContentStatus(Request $request){
    	if($request->ajax()){
    		$data = $request->all();
    		//dd($data);die;
    		if($data['status']=="Active"){
    			$status = 0;
    		}else{
    			$status = 1;
    		}    		
    		WebContent::where('id',$data['web_content_id'])->update(['status'=>$status]);
    		return response()->json(['status'=>$status,'web_content_id'=>$data['web_content_id']]);
    	}
    }

    public function addEditWebContent(Request $request, $id=null){
    	if($id==""){
    		//Add Tour
    		$title = "Add WebContent";
    		$webcontent = new WebContent;
    		$webcontentdata = array();
            $message = "WebContent added successfully!";   		
    	}else{
    		//Edit Tour
    		$title = "Edit WebContent";
    		$webcontentdata = WebContent::where('id',$id)->first();
    		$webcontentdata = json_decode(json_encode($webcontentdata),true);
            
            $webcontent = WebContent::find($id);
            $message = "WebContent updated successfully!";
    	}
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//dd($data);die;
    		$rules = [
    			
                'web_content_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ];
            $customMessages = [                
                'web_content_image.image' => 'Valid image is required',
                'web_content_image.mimes' => 'Only jpeg,png,gif,svg format are allowed',
                'web_content_image.max' => 'Maximum image size is 1024',                
            ];
            $this->validate($request,$rules,$customMessages);

            //Upload Hotel Category Image
            if($request->hasFile('web_content_image')){
                $image_tmp = $request->file('web_content_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Genereate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $sliderImagePath = public_path('images/backend_images/webContents/'.$imageName);
                    Image::make($image_tmp)->resize(1600,575)->save($sliderImagePath);

                	$webcontent->web_content_image = $imageName;
            	}
            }
    		
    		if(empty($data['web_content_image'])){
    			$data['web_content_image']="";
    		}
            $webcontent->admin_id = Auth::guard('admin')->user()->id;
    		$webcontent->title = $data['title'];
    		$webcontent->content = $data['content'];
    		$webcontent->channel = Str::random(10);
            $webcontent->posted_date = date('Y-m-d H:i:s');
    		$webcontent->status = 1;
    		$webcontent->save();

    		Session::flash('success_message',$message);
    		return redirect('admin/view-web-contents');
    	}
    	return view('admin.webContents.add_edit_web_content')->with(compact('title','webcontentdata'));
    }

    public function deleteWebContentImage($id){
        //Get WebContent Image
        $webContentImage = WebContent::select('web_content_image')->where('id',$id)->first();

        //Get WebContent Image path
        $webContentImagePath = public_path('images/backend_images/webContents/');

        //Delete WebContent Image folder if exists
        if(file_exists($webContentImagePath.$webContentImage->web_content_image)){
            unlink($webContentImagePath.$webContentImage->web_content_image);
        }

        //Delete WebContent Image from categories table
        WebContent::where('id',$id)->update(['web_content_image'=>'']);

        $message = 'WebContent image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }    

    public function deleteWebContent($id){
        //Delete WebContent
        WebContent::where('id',$id)->delete();
        $message = 'WebContent image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    } 
}
