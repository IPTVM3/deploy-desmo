<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Visitor
{

    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isCustomer())
        {
            return redirect('/customer');
        }
        if (Auth::check() && Auth::user()->isAdmin())
        {
            return redirect('/dashboard');
        }


        return $next($request);


    }
}