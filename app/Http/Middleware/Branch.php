<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Branch
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $zone_id=session('zone_sess_id');
        if(!isset($zone_id)){
            return redirect("/");
        }else{
            return $next($request);
        }
    }
}
