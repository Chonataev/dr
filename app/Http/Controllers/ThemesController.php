<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Models\Theme;

class ThemesController extends Controller
{

    public function index()
    {
        $themes = Theme::all();
        return view('admin.themes.index', compact('themes'));
    }
    public function create(): Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.themes.create');
    }

    public function show(Theme $theme)
    {
        return view('admin.themes.show', compact('theme'));
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            // Добавьте здесь другие правила валидации
        ]);

        // Создание записи в базе данных
        Theme::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id, // или любой другой способ определения пользователя
        ]);

        // Редирект на страницу с подтверждением или другую страницу
        session(['success' => 'Тема создана!']);
        return redirect()->route('themes.index')->with('success', 'Theme created successfully!');
    }

    public function edit(Theme $theme)
    {
        return view('admin.themes.edit', compact('theme'));
    }

    public function update(Request $request, Theme $theme)
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|int|max:255',
            // Добавьте здесь другие правила валидации
        ]);

        // Обновление записи в базе данных
        $theme->update([
            'title' => $request->title,
            'status' => $request->status,
        ]);

        // Редирект на страницу с подтверждением или другую страницу
        return redirect()->route('admin.themes.index', $theme)->with('success', 'Theme updated successfully!');
    }

    public function destroy(Theme $theme)
    {
        // Удаление записи из базы данных
        $theme->delete();

        // Редирект на страницу с подтверждением или другую страницу
        return redirect()->route('admin.themes.index')->with('success', 'Theme deleted successfully!');
    }
}
