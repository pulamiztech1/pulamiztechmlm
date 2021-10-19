<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Image;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        Session::put('page','dashboard');
    	return view('admin.admin_dashboard');
    }

    public function settings(){
        Session::put('page','settings');      
        //dd(Auth::guard('admin')->user());die;
        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        return view('admin.admin_users.admin_settings')->with(compact('adminDetails'));
    }

    public function login(Request $request){
    	//echo $password = Hash::make('123456');die;
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//dd($data);die;
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                'email.required' => 'Email is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request,$rules,$customMessages);

    		if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
    			return redirect('admin/dashboard');
    		}else{
    			Session::flash('error_message','Invalid Email or Passowrd!');
    			return redirect()->back();
    		}
    	}
    	return view('admin.admin_login');
    }
    public function logout(){    	
    	Auth::guard('admin')->logout();
        Session::flash('success_message','Logout Successfull!');
    	return redirect('admin');
    }

    public function chkCurrentPwd(Request $request){
        $data = $request->all();
        //dd($data);
        //dd(Auth::guard('admin')->user()->password);die;
        if(Hash::check($data['admin_current_password'],Auth::guard('agent')->user()->password)){
            echo "true";
        }else{
            echo "false";
        }
    }
    public function updateCurrentPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //dd($data);die;
            //Check if current password is correct
            if(Hash::check($data['admin_current_password'],Auth::guard('agent')->user()->password)){
                //check if new and confirm password is matching
                if($data['admin_new_password']==$data['admin_confirm_pwd']){
                    Admin::where('id',Auth::guard('agent')->user()->id)->update(['password'=>bcrypt($data['admin_new_password'])]);
                    Session::flash('success_message','Password has been updated successfully!');
                }else{
                    Session::flash('error_message','Confirm password is not match');
                }
            }else{
                Session::flash('error_message','Your current password is incorrect');
            }
            return redirect()->back();
        }
        Session::put('page','settings');      
        //dd(Auth::guard('agent')->user());die;
        $adminDetails = Admin::where('email',Auth::guard('agent')->user()->email)->first();
        return view('admin.admins.update_admin_password')->with(compact('adminDetails'));
    }   

    public function addAdminUser(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>";print_r($data);die;
            $admin = new Admin;
            $admin->name = $data['name'];
            $admin->type = $data['type'];
            $admin->mobile = $data['mobile'];
            $admin->email = $data['email'];
            $admin->password = bcrypt($data['password']);

            if($request->hasFile('profile_image')){
                $image_tmp = $request->file('profile_image');
                if($image_tmp->isValid()){
                    //Upload image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $profileImagePath = 'images/backend_images/admin_profile/'.$filename;
                    //resize Image
                    Image::make($image_tmp)->resize(180,200)->save($profileImagePath);

                    //store image name in products table
                    $admin->profile_image = $filename;
                }   
            }
            $admin->status = 1;
            $admin->save();

            $message = 'Admin user has been added successfully!';
            Session::flash('success_message',$message);
            return redirect('/admin/add-admin-users');
        }
        return view('admin.admins.add_admin_users');
    }
    public function updateAdminDetails(Request $request){
        Session::put('page','update-admin-details');      
        if($request->isMethod('post')){
            $data = $request->all();
            //dd($data);die;
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric',
                'profile_image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ];
            $customMessages = [
                'name.required' => 'Name is required',
                'name.regex' => 'Valid Name is required',
                'mobile.required' => 'Mobile is required',
                'mobile.numeric' => 'Valid Mobile is required',
                'profile_image.image' => 'Valid image is required',
                'profile_image.mimes' => 'Only jpeg,png,gif,svg format are allowed',
                'profile_image.max' => 'Maximum image size is 1024',
            ];
            $this->validate($request,$rules,$customMessages);

            //Upload Image
            if($request->hasFile('profile_image')){
                $image_tmp = $request->file('profile_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Genereate New Image Name
                    $imageName = rand(111,99999).'.'.$extension;
                    $profileImagePath = 'images/backend_images/admin_profile/'.$imageName;
                    Image::make($image_tmp)->resize(300,400)->save($profileImagePath);
                    //dd($imageName);die;

                }
            }else if(!empty($data['current_admin_image'])){
                $imageName = $data['current_admin_image'];
            }else{
                $imageName = '';
            }
            //Update Admin Details
            Admin::where('email',Auth::guard('agent')->user()->email)
            ->update(['name'=>$data['name'],'type'=>$data['type'],'mobile'=>$data['mobile'],'profile_image'=>$imageName]);
            $message = 'Admin details updated successfully!';
            Session::flash('success_message',$message);
            return redirect()->back();
        }
        return view('admin.admins.update_admin_profile');
    }

    public function viewAdminUsers(){
        Session::put('page','admin-users');
        $admins = Admin::get();
        return view('admin.admins.view_admin_users')->with(compact('admins'));
    }

    public function updateAdminUserStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            //dd($data);die;
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }           
            Admin::where('id',$data['admin_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'admin_id'=>$data['admin_id']]);
        }
    }
    public function deleteAdminProfileImage($id){
        //Get Category Image
        $profileImage = Admin::select('profile_image')->where('id',$id)->first();

        //Get Category Image path
        $profileImagePath = 'images/backend_images/admin_profile/';

        //Delete Category Image folder if exists
        if(file_exists($profileImagePath.$profileImage->profile_image)){
            unlink($profileImagePath.$profileImage->profile_image);
        }

        //Delete Category Image from categories table
        Admin::where('id',$id)->update(['profile_image'=>'']);

        $message = 'Admin profile image has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect('/admin/update-admin-details');
    } 

    public function deleteAdminUser($id){
        //Delete Category
        Admin::where('id',$id)->delete();
        $message = 'Admin user has been deleted successfully!';
        Session::flash('success_message',$message);
        return redirect()->back();
    }    

    public function viewAllMembers(){
        Session::put('page','view-members');
        //$users = User::with('memberlists')->get();
        $users = User::get();
        return view('admin.members.view_members')->with(compact('users'));
    }

    public function memberAdminDetails($own_id){
        $memberAdminDetails = User::where('own_id',$own_id)->first();
        $memberAdminDetails = json_decode(json_encode($memberAdminDetails));
        return view('admin.members.member_details')->with(compact('memberAdminDetails'));
    }
}
