<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
          if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role; 

            switch ($role) {
              case '1':
                 return redirect()->route('admin.route');
                 break;
              case '2':
                 return redirect()->route('seller.route');
                 break; 
              case '0':
                 return redirect()->route('user.route');
                 break; 

              default:
                 return redirect('/home'); 
                 break;
            }
          }
          return $next($request);
        }
}
