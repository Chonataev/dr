<?php

namespace App\Http\Controllers;

use App\Models\Answer;
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
                $right = null;
                // Создание ответа и сохранение question_id
                if ($questionData['correct_answer'] == $index )
                {
                    $right = true;
                }
                $question->answers()->create([
                    'content' => $answer,
                    'right' => $right,
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
     * @param $question_id
     * @return Factory|View
     */
    public function edit($question_id): Factory|View
    {
        $question = Question::findOrFail($question_id);
        $answers = Answer::where('question_id', $question->id)->get();
        return view('admin.questions.edit', compact('question', 'answers'));
    }



    /**
     * Update the specified question in storage.
     *
     * @param Request $request
     * @param Question $question
     * @return RedirectResponse
     */
    public function update(Request $request, Question $question): RedirectResponse
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
            $answer = $question->answers->where('id', $index)->first();
            if ($answer) {
                $answer->content = $answerData;
                $answer->right = ($index == $request->input('correct_answer')); // Проверяем правильность ответа
                $answer->save();
            } else {
                // Если ответа не существует, создаем новый
                $question->answers()->create([
                    'content' => $answerData,
                    'right' => ($index === $request->input('correct_answer'))
                ]);
            }
        }

        $test_id = $question->test_id;
        return redirect()->route('questions.index', ['test' => $test_id])->with('success', 'Question updated successfully!');
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

        $test_id = $question->test_id;
        return redirect()->route('questions.index', ['test' => $test_id])->with('success', 'Question updated successfully!');
    }
}
