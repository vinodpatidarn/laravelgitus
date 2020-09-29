<?php

namespace App\Http\Middleware;

use Closure;

class Usersauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req)
    {
       if($req->input('username') == "vinod patidar")
       {
                     

      }
    }
} 
