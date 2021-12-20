<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function store(Request $request){
        comment::create([
            'content'=>$request->content,
            'user_id'=>auth()->user()->id,
            'thread_id'=>$request->thread_id,
            'qoute'=>$request->q
        ]);
        return redirect()->back();
    }
}
