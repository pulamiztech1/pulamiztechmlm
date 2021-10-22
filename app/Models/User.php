<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Wallet;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'fullname',
        'referalID',
        'phone_no',
        'profileImage',
        'membershipDate',
        'state',
        'city',
        'zipcode',
        'address',
        'credit_card_id',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function referal_code(){
        return $this->hasOne(ReferalCode::class,'user_id');
    }
    public function matrix(){
        return $this->hasOne(Matrix::class,'user_id');
    }
    public function supports(){
        return $this->hasMany(Support::class,'user_id');
    }
    public function wallet(){
        return $this->hasOne(Wallet::class,'user_id');
    }
    public function transaction_histories(){
        return $this->hasMany(TransactionHistory::class,'user_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'user_id');
    }
}
