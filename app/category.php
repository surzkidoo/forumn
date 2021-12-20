<?php

namespace App;

use App\thread;
use Illuminate\Database\Eloquent\Model;



class category extends Model
{

    protected $guarded = [];
    
    public function threads(){
        return $this->hasMany(thread::class);
    }

    
}
