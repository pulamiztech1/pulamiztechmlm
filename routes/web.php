<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\WebContentController;

//Front Controllers
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\Front\ProductsController;

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

		// Admin Slider Routes		
		Route::post('/update-slider-status',[SliderController::class, 'updateSliderStatus']);
		Route::match(['get','post'],'/add-edit-slider/{id?}',[SliderController::class, 'addEditSlider'])->name('addEditSlider');
		Route::get('/view-sliders',[SliderController::class, 'viewSliders'])->name('viewSliders');
		Route::get('delete-slider/{id}',[SliderController::class,'deleteSlider'])->name('deleteSlider');
		Route::get('delete-slider-image/{id}',[SliderController::class, 'deleteSliderImage'])->name('deleteSliderImage');

		// Admin Products Routes		
		Route::post('/update-product-status',[ProductController::class, 'updateProductStatus']);
		Route::match(['get','post'],'/add-edit-product/{id?}',[ProductController::class, 'addEditProduct'])->name('addEditProduct');
		Route::get('/view-products',[ProductController::class, 'viewProducts'])->name('viewProducts');
		Route::get('delete-product/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');
		Route::get('delete-product-image/{id}',[ProductController::class, 'deleteProductImage'])->name('deleteProductImage');
		Route::get('/view-product-details/{id}',[ProductController::class,'productDetails'])->name('productDetails');

		// Admin Web Contents Routes		
		Route::post('/update-web-content-status',[WebContentController::class, 'updateWebContentStatus']);
		Route::match(['get','post'],'/add-edit-web-content/{id?}',[WebContentController::class, 'addEditWebContent'])->name('addEditWebContent');
		Route::get('/view-web-contents',[WebContentController::class, 'viewWebContents'])->name('viewWebContents');
		Route::get('delete-web-content/{id}',[WebContentController::class,'deleteWebContent'])->name('deleteWebContent');
		Route::get('delete-web-content-image/{id}',[WebContentController::class, 'deleteWebContentImage'])->name('deleteWebContentImage');
		Route::get('/view-web-content-details/{id}',[WebContentController::class,'webContentDetails'])->name('webContentDetails');

			
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

	//Product Listing route
	Route::get('/shop', [ProductsController::class, 'productsListing'])->name('productsListing');
	Route::get('/product-details/{slug}', [ProductsController::class, 'productDetails'])->name('productDetails');
	
	//Add to cart routes
	Route::post('/add-to-cart', [ProductsController::class, 'addToCart'])->name('addToCart');
	Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
	Route::post('/delete-cart-item', [ProductsController::class, 'deleteCartItem'])->name('deleteCartItem');


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