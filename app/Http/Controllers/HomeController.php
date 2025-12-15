<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SdgGoal;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goals = SdgGoal::all();

        $chartData = $goals->map(function ($goal) {
            return [
                'title' => $goal->title,
                'color' => $goal->color,
                'code'  => $goal->code,
                'url'   => $goal->url,
                'data'  => [
                    ['title' => 'Индикатор 1', 'status' => 'done', 'value' => 40, 'unit' => '%', 'url' => $goal->url],
                    ['title' => 'Индикатор 2', 'status' => 'process', 'value' => 60, 'unit' => '%', 'url' => $goal->url],
                ]
            ];
        });

        if (Auth::check()) {
            $currentLang = Auth::user()->language ?? 'ru';
        } else {
            $currentLang = session('locale', 'ru');
        }

        $languages = [
            'ru' => 'RU',
            'kk' => 'QZ',
            'en' => 'ENG',
        ];

        return view('home', compact('goals', 'chartData', 'currentLang', 'languages'));
    }

    public function setLocale(Request $request): \Illuminate\Http\JsonResponse
    {
        $locale = $request->input('user_locale', 'ru');

        if(auth()->check()) {
            $user = auth()->user();
            $user->language = $locale;
            $user->save();
        }

        session(['locale' => $locale]);

        return response()->json(['status' => 'ok']);
    }
}
