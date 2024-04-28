<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    /**
     * Show the form for creating a new question.
     *
     * @param Test $test
     * @return Factory|View
     */
    public function index(Test $test): Factory|View
    {

        // Найти все вопросы, связанные с данным тестом
        $questions = Question::where('test_id', $test->id)->get();

        // Возвращаем представление с найденными вопросами
        return view('admin.tests.show', compact('questions', 'test'));
    }

    /**
     * Show the form for creating a new question.
     *
     * @param $test_id
     * @return Factory|View
     */
    public function create($test_id)
    {
        // Получите тест по его идентификатору
        $test = Test::findOrFail($test_id);

        return view('admin.questions.create', compact('test'));
    }

    /**
     * Store newly created questions in storage.
     *
     * @param $test_id
     * @param Request $request
     * @return RedirectResponse
     */
    public function store($test_id, Request $request): RedirectResponse
{
    $request->validate([
        'questions.*.question' => 'required|string',
        'questions.*.answers.*' => 'required|string',
    ]);

    $questionsData = $request->input('questions');

    foreach ($questionsData as $questionData) {
        $question = new Question();
        $question->question = $questionData['question'];
        $question->user_id = Auth::user()->getAuthIdentifier();
        $question->test_id = $test_id;
        $question->save();

        foreach ($questionData['answers'] as $index => $answer) {
            if (!empty($answer)) {
                // Создание ответа и сохранение question_id
                $question->answers()->create([
                    'content' => $answer,
                    'question_id' => $question->id, // Сохранение ID вопроса
                ]);
            }
        }
    }

    return redirect()->route('tests.index')->with('success', 'Questions created successfully!');
}



    /**
     * Show the form for editing the specified question.
     *
     * @param Test $test
     * @param Question $question
     * @return Factory|View
     */
    public function edit(Test $test, Question $question): Factory|View
    {
        return view('questions.edit', compact('test', 'question'));
    }

    /**
     * Update the specified question in storage.
     *
     * @param Request $request
     * @param Test $test
     * @param Question $question
     * @return RedirectResponse
     */
    public function update(Request $request, Test $test, Question $question): RedirectResponse
    {
        $request->validate([
            'question' => 'required|string',
            'answers.*' => 'required|string',
        ]);

        // Обновление вопроса
        $question->question = $request->input('question');
        $question->save();

        // Обновление или добавление ответов
        $answersData = $request->input('answers');
        foreach ($answersData as $index => $answerData) {
            // Если ответ существует, обновляем его
            if (isset($question->answers[$index])) {
                $question->answers[$index]->content = $answerData;
                $question->answers[$index]->save();
            } else {
                // Если ответа не существует, создаем новый
                $question->answers()->create(['answer' => $answerData]);
            }
        }

        return redirect()->route('questions.index')->with('success', 'Question updated successfully!');
    }

    /**
     * Remove the specified question from storage.
     *
     * @param Test $test
     * @param Question $question
     * @return RedirectResponse
     */
    public function destroy(Test $test, Question $question): RedirectResponse
    {
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully!');
    }
}
