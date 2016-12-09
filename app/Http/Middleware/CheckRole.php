<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if($request->jabatan = 'Tata Usaha'){
            return redirect('/tata_usaha');
        }
        elseif ($request->jabatan = 'Guru')
        {
            return redirect('/guru');
        }
        return $next($request);
    }
}
