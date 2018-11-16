<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Superadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
      if(Auth::user()->role_id>=3) {
        return redirect('admin/permission');
      }
        return $next($request);
    }
}
