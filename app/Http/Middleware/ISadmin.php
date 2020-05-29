<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;
use Closure;
use Auth ;
class ISadmin
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

        if(auth()->check()&&$request->user()->admin == 0){

          Auth::Logout();
          return redirect('/') ;

    }

        return $next($request);
    }
}
