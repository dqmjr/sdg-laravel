<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Берём язык из сессии или используем дефолтный
        $locale = session('locale', config('app.locale'));

        // Устанавливаем локаль приложения
        App::setLocale($locale);

        return $next($request);
    }
}
