<?php

namespace App;

use App\User;
use App\thread;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
   protected $guarded=[];

     public function user(){
        return $this->belongsTo(User::class);
     }

     public function threads(){
        return $this->belongsTo(thread::class);
     }

     public function child(){
       return $this->hasMany(self::class,'qoute','id');
     }
     public function parent(){
        return $this->belongsTo(self::class,'qoute','id');
      }
}
