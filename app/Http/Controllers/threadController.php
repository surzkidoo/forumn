<?php

namespace App\Http\Controllers;

use App\thread;
use App\comment;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class threadController extends Controller
{
   public function index(){
      return dd(thread::paginate(5));
    }

    public function create()
    {
       
      
        
        

        return view("newpost",['categories'=>category::get()]);

    }

    
    public function store(Request $request)
    {
     $image=  $request->image->store('image','public');
   

    thread::create([
           "likes" => 0,
           "views" => 0,
           'cover_image' => $image,
           "title" => $request->title,
           'category_id'=>$request->category,
           "content" => $request->content,
           "user_id" => auth()->user()->id,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('post',['thread'=>thread::find($id),'comments'=>comment::where('thread_id','=',$id)->paginate(5)]);
    }

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        thread::find($id)->delete();
        return redirect()->back();
    }
}
