<?php

namespace App\Http\Middleware;

use App\Store;
use Closure;
use Illuminate\Support\Facades\Auth;

class ForceConfiguredStore
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
        if (Store::findOrFail(1)->configured_at == null)
        {
            return redirect('/force_first_config_store');
        }

        return $next($request);
    }
}