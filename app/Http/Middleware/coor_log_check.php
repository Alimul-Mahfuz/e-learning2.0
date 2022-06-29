<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Auth;

class coor_log_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('coordinatorEmail'))
            return redirect()->route('login');
        else
            return $next($request);
        // session()->flash('msg',"You need to login");
        
    }
}
