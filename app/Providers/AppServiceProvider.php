<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = auth()->check()
            ? (Auth::user()->language ?? session('locale', 'ru'))
            : session('locale', 'ru');

        App::setLocale($locale);

        View::composer('*', function ($view) {
            $currentLang = auth()->check()
                ? (auth()->user()->language ?? session('locale', 'ru'))
                : session('locale', 'ru');

            $view->with('currentLang', $currentLang);
        });

    }
}
