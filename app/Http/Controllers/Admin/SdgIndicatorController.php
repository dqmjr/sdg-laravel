<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SdgIndicator;
use App\Models\SdgGoal;
use Illuminate\Http\Request;

class SdgIndicatorController extends Controller
{
    public function index()
    {
        $indicators = SdgIndicator::with('goal')->get();
        return view('admin.indicators.index', compact('indicators'));
    }

    public function create()
    {
        $goals = SdgGoal::all();
        return view('admin.indicators.create', compact('goals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'goal_id'   => 'required|exists:sdg_goals,id',
            'title'     => 'required|string|max:255',
            'title_kk'  => 'nullable|string|max:255',
            'title_en'  => 'nullable|string|max:255',
            'status'    => 'nullable|in:good,bad,neutral',
            'value'     => 'nullable|numeric',
            'unit'      => 'nullable|string|max:255',
            'unit_kk'   => 'nullable|string|max:255',
            'unit_en'   => 'nullable|string|max:255',
            'url'       => 'nullable|url',
        ]);

        SdgIndicator::create($request->all());

        return redirect()
            ->route('admin.indicators.index')
            ->with('success', 'Индикатор создан');
    }

    public function edit(SdgIndicator $indicator)
    {
        $goals = SdgGoal::all();
        return view('admin.indicators.edit', compact('indicator', 'goals'));
    }

    public function update(Request $request, SdgIndicator $indicator)
    {
        $request->validate([
            'goal_id'   => 'required|exists:sdg_goals,id',
            'title'     => 'required|string|max:1000',
            'title_kk'  => 'nullable|string|max:1000',
            'title_en'  => 'nullable|string|max:1000',
            'status'    => 'nullable|in:good,bad,neutral',
            'value'     => 'nullable|numeric',
            'unit'      => 'nullable|string|max:1000',
            'unit_kk'   => 'nullable|string|max:1000',
            'unit_en'   => 'nullable|string|max:1000',
            'url'       => 'nullable|url',
        ]);

        $indicator->update($request->all());

        return redirect()
            ->route('admin.indicators.index')
            ->with('success', 'Индикатор обновлён');
    }

    public function destroy(SdgIndicator $indicator)
    {
        $indicator->delete();
        return redirect()
            ->route('admin.indicators.index')
            ->with('success', 'Индикатор удалён');
    }
}
