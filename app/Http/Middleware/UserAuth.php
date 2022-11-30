<?php

namespace App\Http\Middleware;
use Closure;

use Illuminate\Http\Request;

use Session;
use Auth;
class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $path = $request->path();
          if(($path=="login" || $path=="register" || $path=="/") && ($request->user()))
          {

            return redirect('/view');

          }
        // if ($request->user()) {
        //     echo 'user is logged in';
        // } else {
        //     echo 'user is not logged in';
        // }
        return $next($request);
    }
}
