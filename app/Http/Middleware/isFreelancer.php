<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class isFreelancer
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
      if(Auth::user()->freelancer){
        return $next($request);
      }
      else{
        return redirect()->route('user.get'); 
      }
    }
}
