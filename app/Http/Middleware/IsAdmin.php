<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
<<<<<<< HEAD
        if(auth()->user()->is_admin == 1)
=======
        if (auth()->user()->is_admin == 1)
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
        {
            return $next($request);
        }

<<<<<<< HEAD
        return redirect('home')->with('error', "You don't have admin access.");
=======
        return redirect('home')->with('status', "Sorry, you dont't have admin access.");
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
    }
}
