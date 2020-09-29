<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uservinod extends Controller
{
    public function index(Request $req)
    {
        $req->session()->flash('data',$req->input('userName'));
        return redirect('userview/');
    }
}
