<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests'));
    }

    public function create()
    {
        return view('tests.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            'themes_id' => 'required|integer',
            'body' => 'required|string',
            'status' => 'required|string',
            // Добавьте здесь другие правила валидации
        ]);

        // Создание записи в базе данных
        Test::create($request->all());

        return redirect()->route('tests.index')->with('success', 'Test created successfully!');
    }

    public function show(Test $test)
    {
        return view('tests.show', compact('test'));
    }

    public function edit(Test $test)
    {
        return view('tests.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        // Валидация данных
        $request->validate([
            'title' => 'required|string|max:255',
            'themes_id' => 'required|integer',
            'body' => 'required|string',
            'status' => 'required|string',
            // Добавьте здесь другие правила валидации
        ]);

        // Обновление записи в базе данных
        $test->update($request->all());

        return redirect()->route('tests.index')->with('success', 'Test updated successfully!');
    }

    public function destroy(Test $test)
    {
        // Удаление записи из базы данных
        $test->delete();

        return redirect()->route('tests.index')->with('success', 'Test deleted successfully!');
    }
}
