<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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
        // TODO: Refactor to change the uri based on request query for aesthetics.
        // Currently, it changes the locale but has query in the url e.g. ?pl=

        $queryLocale = $request->hasAny(['en', 'pl', 'de']) ? array_keys($request->query())[0] : null;
        $locale = $queryLocale ?? $request->segment(1);

        app()->setLocale($locale);
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
