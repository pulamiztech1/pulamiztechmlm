<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    use HasFactory;
    protected $guarded =[];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function left_child(){
        return $this->belongsTo(User::class,'left_child','id');
    } 
    public function middle_child(){
        return $this->belongsTo(User::class,'middle_child','id');
    }
     public function right_child(){
        return $this->belongsTo(User::class,'right_child','id');
    }
}
