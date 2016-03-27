<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class UserMiddleware
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
       $user=$request->session()->get('user_id');
       $request->user = User::find($user);
       return $next($request);
    }
}
