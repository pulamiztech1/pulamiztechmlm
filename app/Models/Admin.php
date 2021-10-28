<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
	protected $guard = 'admin';
	protected $fillable = [
		'name', 'mobile', 'type', 'password', 'profile_image', 'status', 'created_at', 'updated_at'
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	*The attributes that should be cast to native types.
	*
	*
	*@var array
	*/
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function webContents(){
        return $this->hasMany(WebContent::class,'admin_id');
    }
}
