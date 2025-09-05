<?php

namespace App\Http\Controllers;

use App\Models\SdgGoal;

class SdgController extends Controller
{
    public function index()
    {
        // Забираем цели с индикаторами
        $goals = SdgGoal::with('indicators')->get();

        // Отправляем в Blade-шаблон
        return view('home', [
            'goals' => $goals
        ]);
    }

}
