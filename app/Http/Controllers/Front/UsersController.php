<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReferalCode;
use App\Models\Matrix;
use Auth;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use DB;
use App\Library\ReferalCodeGenerator;
use App\Library\UserNameGenerator;
use Carbon\Carbon;
use Hash;
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
            $referal_code_exist=ReferalCode::where('referal_code',$request->referrer_code)->first();
            if(!$referal_code_exist){
                session::flash('error_message','Invalid Referal Code');
                return redirect()->back();
            }
            //dd($data);die;
            $rules = [
                'name' => 'required',
                'email' => 'required|email|max:255',
                'password' => 'required',
                'referrer_code' => 'required',
            ];

            $customMessages = [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.unique:users' => 'This email is already used',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
                'password.confirmed' => 'Password does not match with retyped password',
                'referrer_code.required' => 'Referral code is required',
            ];

            $this->validate($request,$rules,$customMessages);

            $matrix=Matrix::where('user_id',$referal_code_exist->user_id)->first();

            if($matrix->left_child != NULL && $matrix->middle_child!=NULL && $matrix->right_child!=NULL){
                  Session::flash('error_message',"Exceeds limit of your referer try with another referer or mail us to get new referer");
                  return redirect()->back();
            }
            $user = User::create([
                'referalID'=>$referal_code_exist->user_id,
                'fullname' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'username'=>UserNameGenerator::generate($request->email),
                'membershipDate'=>Carbon::now()->toDateString(),
                'status'=>'inActive'
            ]);
    
            $referal_code=ReferalCode::create([
                 'user_id'=>$user->id,
                 'referal_code'=>ReferalCodeGenerator::generate($user->id)
            ]);
            $level = $matrix->level+1;
            $parent_id=$matrix->user_id;
            if($matrix->left_child === NULL){
                $key='left_child';
            }elseif($matrix->middle_child === NULL){
                $key='middle_child';
            }elseif($matrix->right_child === NULL){
                $key='right_child';
            }else{
                Session::flash('error_message',"Exceeds limit of your referer try with another referer or mail us to get new referer");
                return redirect()->back();
            }
           
            $matrix->update([
                     $key =>$user->id
            ]);
            $new_matrix=Matrix::create([
                        'user_id'=>$user->id,
                        'parent_id'=>$parent_id,
                        'level'=>$level
            ]);
    
            $message = 'Registration Successfully Done .please Login to proceed';
            Session::flash('success_message',$message);
            return redirect()->route('memberLogin');
                       
            
        }
        return view('member.member_register');
    }
    public function memberLogout() {
        Auth::guard('agent')->logout();
        Session::flash('success_message','Logout Successfull!');
    	return redirect()->route('memberLogin');
    }
}
