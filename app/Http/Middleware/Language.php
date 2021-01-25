<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;


class Language
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
        if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
