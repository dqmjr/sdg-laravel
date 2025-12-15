<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($locale = null)
    {
        session(['locale' => $locale]);

        return view("home");
    }

    public function publications($locale)
    {
        session(['locale' => $locale]);

        return view("layouts.$locale.publications");
    }

    public function millennium_development_goals($locale)
    {
        session(['locale' => $locale]);

        return view("layouts.$locale.millennium-development-goals");
    }

    public function events_activities($locale)
    {
        session(['locale' => $locale]);

        return view("layouts.$locale.events-activities");
    }

    public function useful_resources($locale)
    {
        session(['locale' => $locale]);

        return view("layouts.$locale.useful-resources");
    }

    public function contacts($locale)
    {
        session(['locale' => $locale]);

        return view("layouts.$locale.contacts");
    }


    public function setLocale(Request $request)
    {
        $locale = $request->input('locale', 'ru');
        $currentPath = $request->input('current_path', '/');

        session(['locale' => $locale]);

        // нормализуем путь
        $currentPath = trim($currentPath, '/');

        $parts = $currentPath === '' ? [] : explode('/', $currentPath);

        // если первый сегмент — язык
        if (!empty($parts) && in_array($parts[0], ['ru', 'kk', 'en'])) {
            array_shift($parts);
        }

        // собираем новый URL
        $newUrl = '/' . $locale;

        if (!empty($parts)) {
            $newUrl .= '/' . implode('/', $parts);
        }

        return response()->json(['redirect' => $newUrl]);
    }
}
