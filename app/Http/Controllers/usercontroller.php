<?php

namespace App\Http\Controllers;


use auth;
use App\User;
use App\comment;
use Illuminate\Http\Request;use Illuminate\Support\Facades\Hash;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $post=User::find(4);
        if(auth()->attempt(['email' => $post["email"], 'password' => "asdf"],true)){
            dd(comment::all());
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name="musa";
        $last="isah";
        $avatar="jksjld.png";
        $country="1";
        $state="1";
        $password="asdf";
        $dob="2021-10-01";
        $email="as1sd@gmail.com";
        $address="Arkilla baddo";
        $username="figgy";

        User::create([
            "name" => $name,
            "lastname" => $last,
            "avatar" => $avatar,
            "dob" => $dob,
            "address" => $address,
            "email"=>$email,
            "state"=>$state,
            "country_id"=>$country,
            "username"=>$username,
            "password"=>bcrypt($password)
         ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("profile",["user"=>User::find($id)]);
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
            
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route("loginpage");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
           User::find($id)->delete();
           return redirect()->back();
    }

}
