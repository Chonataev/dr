<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'gender' => 'required|string',
            'age' => 'required|integer',
            // Добавьте здесь другие правила валидации
        ]);

        // Создание записи в базе данных
        Question::create($request->all());

        return redirect()->route('questions.index')->with('success', 'Question created successfully!');
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        // Валидация данных
        $request->validate([
            'gender' => 'required|string',
            'age' => 'required|integer',
            // Добавьте здесь другие правила валидации
        ]);

        // Обновление записи в базе данных
        $question->update($request->all());

        return redirect()->route('questions.index')->with('success', 'Question updated successfully!');
    }

    public function destroy(Question $question)
    {
        // Удаление записи из базы данных
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully!');
    }
}
