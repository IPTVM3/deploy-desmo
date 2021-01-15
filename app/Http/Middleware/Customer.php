<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Customer
{

    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isCustomer())
        {
            return $next($request);
        }
        if (Auth::check() ) return redirect('/dashboard');
        if (Auth::check() ) return redirect('/dashboard');


    }
}