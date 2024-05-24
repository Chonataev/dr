<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        foreach ( $tests as $test )
        {
            $theme = Theme::findOrFail($test->themes_id);
            $test['theme_title'] = $theme->title;
            $user = User::findOrFail($test->user_id);
            $test['name'] = $user->name;
        }
        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        $themes = Theme::all();
        return view('admin.tests.create', compact('themes'));
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            'themes_id' => 'required|integer',
            // Добавьте здесь другие правила валидации
        ]);

        Test::create([
            'title' => $request->title,
            'themes_id' => $request->themes_id,
            'user_id' => Auth::user()->getAuthIdentifier(),
        ]);

        return redirect()->route('tests.index')->with('success', 'Сыноо ийгиликтүү түзүлдү!');
    }

    public function show(Test $test)
    {
        return view('admin.tests.show', compact('test'));
    }

    public function edit(Test $test)
    {
        $themes = Theme::all();
        return view('admin.tests.edit', compact('themes', 'test'));
    }

    public function update(Request $request, Test $test)
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            'themes_id' => 'required|integer',
            'status' => 'required|string',
            // Добавьте здесь другие правила валидации
        ]);

        // Обновление записи в базе данных
        $test->update($request->all());

        return redirect()->route('tests.index')->with('success', 'Сыноо ийгиликтүү жаңыртылды!');
    }

    public function destroy(Test $test)
    {
        // Удаление записи из базы данных
        $test->delete();

        return redirect()->route('tests.index')->with('success', 'Сыноо ийгиликтүү өчүрүлдү!');
    }
}
