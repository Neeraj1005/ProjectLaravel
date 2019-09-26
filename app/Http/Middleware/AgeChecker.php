<?php

namespace App\Http\Middleware;

use Closure;

class AgeChecker
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
        //echo "I have add middleware at kernel.php file Global or routemiddleware";
        if ($request->input('age')<20) {
            return redirect('/');
        }
        return $next($request);
    }
}
