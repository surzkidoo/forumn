<?php

namespace App\Http\Controllers;

use App\thread;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function index(){
        if(Auth::check()){
        return view("index",['threads'=>thread::orderBy('id','DESC')->paginate(5),"trends"=>thread::paginate(5)]);
        }
        return view("index",['threads'=>thread::query()->where('privacy','=',"0")->orderBy('id','DESC')->paginate(5),"trends"=>thread::paginate(5)]);
    }


    public function search(Request $req){
        
        $query=$req->input("query");
        return view("search",['results'=>thread::query()->where('title','LIKE',"%{$query}%")->paginate(1)->withQueryString(),"query"=>$query]);
    }
}
