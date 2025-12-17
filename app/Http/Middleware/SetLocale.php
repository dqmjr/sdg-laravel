<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $supported = ['kk', 'ru', 'en'];
        $locale = $request->segment(1); // первый сегмент URL

        if (in_array($locale, $supported) && $locale != 'kk') {
            session(['locale' => $locale]);
            app()->setLocale($locale);
        } else {
            // казахский по умолчанию
            session(['locale' => 'kk']);
            app()->setLocale('kk');
        }

        return $next($request);
    }
}
