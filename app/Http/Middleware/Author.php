<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
    //  if(Auth::user()->role_id>=4) {
      //  return redirect('admin/permission');
      //}
      if(Auth::user()->role_id!=1 && Auth::user()->role_id!=2 && Auth::user()->role_id!=3 && Auth::user()->role_id!=4){
        return redirect('admin/permission');
      }
        return $next($request);
    }
}
