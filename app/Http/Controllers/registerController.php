<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("register");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => "required|string|max:255|min:3",
            "lastname" => "required|string|max:255|min:3",
            "dob" => "required",
            "email"=>"required|email|string|max:255|min:3",
            "course"=>"required|string|max:255|min:3",
            "username"=>"required|string|max:255|min:3",
            "password"=>"required|confirmed"
        ]);
        $image=  $request->image->store('image','public');
        User::create([
            "name" => $request->name,
            "lastname" => $request->lastname,
            "dob" => $request->dob,
            "email"=>$request->email,
            "course"=>$request->course,
            "gender"=>$request->gender,
            "username"=>$request->username,
            "avatar"=>$image,
            "password"=>bcrypt($request->password)
         ]);
         return redirect()->route("loginpage")->with("acc","Profile is successfully created use detail to login");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }
}
