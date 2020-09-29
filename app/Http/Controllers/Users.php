<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function submit(Request $req){

      $req -> validate ([
            
        "username"=>'required',
        "password"=>'required'
      ]);
            
      // echo $req->method();
      $username = $req->input('username');
      // return ($req->input());
      // print_r($req->fullurl()); 
      return view('welcome',['username' => "$username"]);        
    }
}
