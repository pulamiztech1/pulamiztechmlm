<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

   public function memberLogin(Request $request){

        if($request->isMethod('post')){
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
            $credentials = $request->only('email', 'password');
            if(Auth::guard('agents')->attempt($credentials)){
                return redirect()->name('memberDashboard');
            }else{
                Session::flash('error_message','Invalid Email or Passowrd!');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    } 
   public function memberDashboard(){
       return view('member.member_dashboard');
   }
}
