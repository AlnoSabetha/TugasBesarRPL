<?php

namespace App\Http\Middleware;

use Closure;

class Role
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
        if (Auth()->user()->role == 'mahasiswa') {
            return $next($request);
        }
        return redirect('home')->with('error | Anda Tidak Memiliki Akses');
    }
}
