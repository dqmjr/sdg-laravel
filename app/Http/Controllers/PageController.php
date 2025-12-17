<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("home");
    }

    public function publications($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("layouts.$locale.publications");
    }

    public function millennium_development_goals($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("layouts.$locale.millennium-development-goals");
    }

    public function events_activities($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("layouts.$locale.events-activities");
    }

    public function useful_resources($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("layouts.$locale.useful-resources");
    }

    public function contacts($locale = 'kk')
    {
        session(['locale' => $locale]);
        return view("layouts.$locale.contacts");
    }

    public function setLocale(Request $request)
    {
        $locale = $request->input('user_locale', 'kk');
        $currentPath = $request->input('current_path', '/');

        session(['locale' => $locale]);

        $currentPath = trim($currentPath, '/');

        $parts = $currentPath === '' ? [] : explode('/', $currentPath);

        // если первый сегмент — язык
        if (!empty($parts) && in_array($parts[0], ['ru', 'en'])) {
            array_shift($parts);
        }


        if ($locale === 'kk') {
            $newUrl = '/' . implode('/', $parts);
        } else {
            $newUrl = '/' . $locale;
            if (!empty($parts)) {
                $newUrl .= '/' . implode('/', $parts);
            }
        }

        if ($newUrl === '/') {
            return response()->json(['redirect' => '/']);
        }

        return response()->json(['redirect' => $newUrl]);
    }

}
