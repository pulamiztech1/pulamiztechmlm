<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

//Front Controllers
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\UsersController;

Auth::routes();

Route::prefix('/admin')->namespace('Admin')->group(function(){
	//All the Admin Routes will be defined here
	Route::match(['get','post'], '/', [AdminController::class, 'login'])->name('adminLogin');

	Route::group(['middleware'=>['admin']],function(){
		Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');
		Route::post('/check-admin-current-pwd', [AdminController::class, 'chkCurrentPwd']); 
		Route::match(['GET','POST'],'/update-password',[AdminController::class, 'updateCurrentPassword'])->name('adminUpdatePassword');
		Route::get('/logout', [AdminController::class, 'logout'])->name('adminLogout');
		Route::match(['get','post'], '/update-admin-details', [AdminController::class, 'updateAdminDetails'])->name('updateAdminDetails');

		//Admin Users Routes
		Route::match(['get','post'],'/add-admin-users',[AdminController::class, 'addAdminUser'])->name('addAdminUser');
		Route::get('/view-admin-users',[AdminController::class, 'viewAdminUsers'])->name('viewAdminUsers');
		Route::post('/update-admin-user-status',[AdminController::class, 'updateAdminUserStatus'])->name('updateAdminUserStatus');
		Route::get('/delete-admin-user/{id}',[AdminController::class, 'deleteAdminUser'])->name('deleteAdminUser');
		Route::get('/delete-admin-profile-image/{id}',[AdminController::class, 'deleteAdminProfileImage'])->name('deleteAdminProfileImage');

		//Member Users tours
		Route::get('/view-users',[UserController::class, 'viewUsers'])->name('viewUsers');
		Route::get('/view-members',[AdminController::class, 'viewAllMembers'])->name('viewAllMembers');
		Route::get('/view-member-details/{own_id}',[AdminController::class, 'memberAdminDetails'])->name('memberAdminDetails');
		Route::post('/update-user-status',[UserController::class, 'updateUserStatus'])->name('updateUserStatus');

			
	});
});


Route::namespace('Front')->group(function(){
	Route::get('/', [IndexController::class, 'index'])->name('index');

	Route::match(['GET','POST'],'/member-register',[UsersController::class,'memberRegister'])->name('memberRegister');
	

	Route::match(['get','post'],'/member-login',[UsersController::class,'memberLogin'])->name('memberLogin');
	Route::match(['get','post'],'/check-email',[UsersController::class,'checkEmail']);
	Route::match(['get','post'],'/forgot-password',[UsersController::class,'forgotPassword']);
	Route::post('/confirm/{code}',[UsersController::class,'confirmAccount']);
	Route::get('/user-logout',[UsersController::class,'userLogosut']);

	//Confirm Account 
	Route::match(['GET','POST'],'/confirm/{code}',[UsersController::class,'confirmAccount']);

	//forgot password
	Route::match(['GET','POST'],'/forgot-passowrd',[UsersController::class,'forgotPassword']);

	//users Account
	Route::match(['GET','POST'],'/account',[UsersController::class,'userAccount']);


	//Front Users Dashboard routes defined here
	Route::group(['middleware'=>['agent']],function(){
		//Route for Account Page
		Route::get('/member-dashboard', [UsersController::class, 'memberDashboard'])->name('memberDashboard');
		Route::match(['GET','POST'], '/user-account', 'UsersController@account')->name('userAccount');
		Route::get('/view-member-details/{own_id}', [UserController::class, 'viewMemberDetails'])->name('viewMemberDetails');
		Route::match(['GET','POST'], '/update-member-details', [UserController::class, 'updateMemberDetails'])->name('updateMemberDetails');

		Route::get('/user-settings', [UserController::class, 'userSettings'])->name('userSettings');
		
		Route::post('/check-user-current-pwd', [UserController::class, 'checkCurrentPwd']); 

		Route::post('/update-user-password',[UserController::class, 'updateUserCurrentPassword'])->name('userUpdatePassword');
		Route::get('/member-logout', [UserController::class, 'memberLogout'])->name('memberLogout');

		Route::post('/update_walllet', [UserController::class, 'updateWallet'])->name('updateWallet');

		//Members Route				
		Route::get('/view-my-members/{own_id}',[UserController::class, 'viewMyMembers'])->name('viewMyMembers');		
		Route::post('/update-my-member-status',[UserController::class, 'updateMyMemberStatus'])->name('updateMyMemberStatus');
		Route::get('/member/{own_id}', [UserController::class, 'memberDetails'])->name('memberDetails');
		Route::post('/update-member-status/{id}',[UserController::class, 'updateMemberStatus'])->name('updateMemberStatus');

		

		Route::match(['GET','POST'],'/add-new-member', [UserController::class, 'addNewMember'])->name('addNewMember');
		Route::get('/delete-member-profile-image/{id}',[UserController::class, 'deleteMemberProfileImage'])->name('deleteMemberProfileImage');
		Route::get('/delete-member/{id}',[UserController::class, 'deleteMember'])->name('deleteMember');	
	});
});