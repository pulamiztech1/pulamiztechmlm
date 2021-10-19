<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use DB;

class UsersController extends Controller
{
    public function memberDashboard(){
        Session::put('page','memberDashboard');
    	return view('member.member_dashboard');
    }
    public function userRegisterForm(){
        Session::put('page','memberRegister');    	
    	return view('front.user_register'); 
    }
    
    public function memberLogin(Request $request){
        //echo $password = Hash::make('123456');die;
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//dd($data);die;
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];

            $customMessages = [
                'username.required' => 'Username is required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request,$rules,$customMessages);

            $username = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    		if(Auth::guard('agent')->attempt([$username => $data['username'],'password'=>$data['password']])){
    			return redirect('/member-dashboard/');
    		}else{
    			Session::flash('error_message','Invalid Email or Passowrd!');
    			return redirect()->back();
    		} 
    	}
    	return view('member.member_login');
    }

    public function memberRegister(Request $request){
        if($request->isMethod('post')){
            Session::forget('error_message');
            Session::forget('success_message');
            $data = $request->all();
            //dd($data);die;
            $rules = [
                'name' => 'required',
                'email' => 'required|email|max:255',
                'username' => 'required',
                'password' => 'required',
                'referrer_id' => 'required',
            ];

            $customMessages = [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.unique' => 'This email is already used',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
                'username.required' => 'Username is required',
                'referrer_id.required' => 'Referral code is required',
            ];

            $this->validate($request,$rules,$customMessages);
            //dd($data);die;
            $userCount = User::where('email',$data['email'])->count();

            $userAutoID = Helper::USERIDGenerator(new User, 'own_id', 4, 'MM'); 

            $user = DB::table('users')
            ->where('username', $data['referrer_id'])
            ->where('status', '=', 'Approved')
            ->first();

            if(!$user) {
                $message = "Your referral code is not valid!";
                session::flash('error_message',$message);
                return redirect()->back();
            }else {
                $referrer = $user->username;
                $sponserID = $user->own_id;
                $parentID = $user->id;
            }
            
            if($userCount>0){
                $message = "Email already exists!";
                session::flash('error_message',$message);
                return redirect()->back();
            }else{
                $user = new User;
                $user->name = $data['name'];           
                $user->email = $data['email'];                
                $user->username = $data['username'];                
                $user->parent_id = $parentID;              
                $user->sponser_id = $sponserID;              
                $user->referrer_id = $referrer;              
                $user->own_id = $userAutoID;                 
                $user->password = bcrypt($data['password']);
                $user->status = "New";
                $user->save();


               
                $message = 'New member is added successfully! An Email has been sent to your member for further process';
                Session::flash('success_message',$message);
                return redirect()->back();
                       
            }
        }
        return view('member.member_register');
    }
}
