<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        return view('results.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'answer' => 'required|string',
            'test_id' => 'required|integer',
            'user_id' => 'required|integer',
            'status' => 'required|string',
            // Добавьте здесь другие правила валидации
        ]);

        // Создание записи в базе данных
        Result::create($request->all());

        return redirect()->route('results.index')->with('success', 'Натыйжа ийгиликтүү түзүлдү!');
    }

    public function show(Result $result)
    {
        return view('results.show', compact('result'));
    }

    public function edit(Result $result)
    {
        return view('results.edit', compact('result'));
    }

    public function update(Request $request, Result $result)
    {
        // Валидация данных
        $request->validate([
            'answer' => 'required|string',
            'test_id' => 'required|integer',
            'user_id' => 'required|integer',
            'status' => 'required|string',
            // Добавьте здесь другие правила валидации
        ]);

        // Обновление записи в базе данных
        $result->update($request->all());

        return redirect()->route('results.index')->with('success', 'Натыйжа ийгиликтүү жаңыртылды!');
    }

    public function destroy(Result $result)
    {
        // Удаление записи из базы данных
        $result->delete();

        return redirect()->route('results.index')->with('success', 'Натыйжа ийгиликтүү өчүрүлдү!');
    }
}
