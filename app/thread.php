<?php

namespace App;

use App\User;
use App\comment;
use App\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class thread extends Model
{
    protected $guarded=[];

    
        public function comments(): HasMany
        {
            return $this->hasMany(comment::class);
        }


        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function category(){
            return $this->belongsTo(category::class);
        }
    
}
