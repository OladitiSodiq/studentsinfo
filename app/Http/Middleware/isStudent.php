<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class isStudent
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
      if (Session::get('role') != 'lecturer') {
        return redirect()->route('login');
    }
    return $next($request);
    }
}
