<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role === 2) {
            return $next($request);
        }
       
        else {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
    /* public function handle($request, Closure $next)
    {
      // check user if login and this user is admin or not
      if(Auth::check() && Auth::user()->isRole()=="admin")
      {
        //if this user really admin then redirect to their home
          return $next($request);
      }
      return redirect('login'); // if this is not admin the redirect to login
    } */
}
