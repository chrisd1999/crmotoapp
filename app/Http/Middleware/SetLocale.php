<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        // if($request->hasAny(config('app.available_locales'))) {
        //     dd($request->query());
        // }

        app()->setLocale($request->segment(1));

        return $next($request);
    }
}
