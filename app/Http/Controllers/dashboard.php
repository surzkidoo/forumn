<?php

namespace App\Http\Controllers;

use App\User;
use App\thread;
use App\comment;
use App\category;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index(){
        
       
        return view("dashboard",['thread'=>thread::get(),'comment'=>comment::get(),'user'=>User::get(),'category'=>category::get()]);
    }

    public function post(){
        
       
        return view("dashboardpost",['threads'=>thread::paginate(20)]);

    }

    public function user(){
        
       
        return view("dashboarduser",['user'=>User::paginate(20)]);
    }

    public function section(){
        
       
        return view("dashboardsec",['category'=>category::paginate(20)]);
    }
}
