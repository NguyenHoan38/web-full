<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

use Session;
class Locale
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
        $language = Session::get('website_language',config('app.locale'));
        App::setLocale( $language,config('app.locale'));
        return $next($request);
    }
}
