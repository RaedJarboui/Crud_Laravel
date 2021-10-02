<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifAge
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

        if ($request->input('age') < 18)
        {
            return redirect('show');
        }
        return $next($request);



    }
}
