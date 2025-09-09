<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SdgGoal;

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
                    // Здесь ты вставляешь реальные данные для графика
                    // например пока заглушки:
                    ['title' => 'Индикатор 1', 'status' => 'done', 'value' => 40, 'unit' => '%', 'url' => $goal->url],
                    ['title' => 'Индикатор 2', 'status' => 'process', 'value' => 60, 'unit' => '%', 'url' => $goal->url],
                ]
            ];
        });

        return view('home', compact('goals', 'chartData'));
    }
}
