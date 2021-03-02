<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Buyer {

	public function handle($request, Closure $next) {

		if (auth()->guest()) {
			return redirect('/')->with('error', 'You dont have admin access');
		} else {
			if (auth()->user()->role == 0 || auth()->user()->role == 1) {
				return $next($request);
			}
		}
		return redirect('home')->with('error', "You have no proper authentication to access the area!");
	}

}