<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SdgGoal;
use Illuminate\Http\Request;

class SdgGoalController extends Controller
{
    public function index()
    {
        $goals = SdgGoal::all();
        return view('admin.goals.index', compact('goals'));
    }

    public function create()
    {
        return view('admin.goals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'     => 'required|max:5',
            'title'    => 'required|string|max:255',
            'title_kk' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'url'      => 'required|string|max:255',
            'url_kk'   => 'nullable|string|max:255',
            'url_en'   => 'nullable|string|max:255',
            'color'    => 'nullable|string|max:255',
        ]);

        SdgGoal::create($request->all());

        return redirect()->route('admin.goals.index')
            ->with('success', 'Цель создана');
    }

    public function edit(SdgGoal $goal)
    {
        return view('admin.goals.edit', compact('goal'));
    }

    public function update(Request $request, SdgGoal $goal)
    {
        $request->validate([
            'code'     => 'required|max:5',
            'title'    => 'required|string|max:255',
            'title_kk' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'url'      => 'required|string|max:255',
            'url_kk'   => 'nullable|string|max:255',
            'url_en'   => 'nullable|string|max:255',
            'color'    => 'nullable|string|max:255',
        ]);

        $goal->update($request->all());

        return redirect()->route('admin.goals.index')
            ->with('success', 'Цель обновлена');
    }

    public function destroy(SdgGoal $goal)
    {
        $goal->delete();
        return redirect()->route('admin.goals.index')
            ->with('success', 'Цель удалена');
    }
}
