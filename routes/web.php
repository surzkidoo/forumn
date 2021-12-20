<?php

use App\Http\Controllers\thread;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

Route::get('/', "indexController@index")->name("home");
Route::get('/search', "indexController@search")->name("search");


Route::get('/post', "threadController@index");
Route::get('/post/create', "threadController@create");
Route::put('/post/{id}', "threadController@update");
Route::get('/post/{id}/', "threadController@show");
Route::get('/post/{id}/edit', "threadController@edit");
Route::delete('/post/{id}', "threadController@destroy")->name("threaddelete");
Route::post('/post', "threadController@store")->name("newpost");

Route::get('/category', "CategoryController@index");
Route::get('/category/create', "CategoryController@create");
Route::put('/category/{category}',"CategoryController@update");
Route::get('/category/{category}/',"CategoryController@show");
Route::get('/category/{category}/edit',"CategoryController@edit");
Route::delete('/category/{id}',"CategoryController@destroy")->name("catdelete");;
Route::post('/category', "CategoryController@store")->name("catcreate");

Route::get('/user', "usercontroller@index");
Route::get('/user/create', "usercontroller@create");
Route::put('/user/{id}', "usercontroller@update");
Route::get('/user/{id}/', "usercontroller@show");
Route::get('/user/{id}/edit', "usercontroller@edit");
Route::delete('/user/{id}', "usercontroller@destroy")->name("userdelete");
Route::post('/user', "usercontroller@store");
Route::get('/logout',"userController@logout")->name('logout');





Route::get('/dashboard', "dashboard@index")->name('dashboard');
Route::get('/dashboard/post', "dashboard@post")->name('dashboardpost');
Route::get('/dashboard/thread', "dashboard@post")->name('dashboardthread');
Route::get('/dashboard/user', "dashboard@user")->name('dashboarduser');
Route::get('/dashboard/category', "dashboard@section")->name('dashboardsec');


Route::post('/comment', "commentController@store")->name('addcomment');

Route::get('/login', "loginController@index")->name("loginpage");
Route::post('/login', "loginController@store")->name("login");

Route::get('/register', "registerController@index")->name("registerpage");
Route::post('/register', "registerController@store")->name("register");




