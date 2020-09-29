<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route::get('hello',function(){
//      return view('hello');
// // ;});
// route::redirect("vinodpatidar/","hello");
// route::get('hello/{id}','Uservinod@index');
route::view('username/','hello');

route::get('userinfo/','Uservinod@index')->middleware('username');
