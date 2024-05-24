<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Books;
use App\Models\Disqus;
use App\Models\Forum;
use App\Models\Question;
use App\Models\Results;
use App\Models\StudentTestAnswer;
use App\Models\Test;
use App\Models\Theme;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $themes = Theme::all();

        return view('app.index', ['themes' => $themes]);
    }

    public function forums()
    {
        $forums = Forum::all();

        return view('app.forums', ['forums'=>$forums]);
    }

    public function forumDetails($forum_id)
    {
        $forum = Forum::find($forum_id);
        $discussions = Disqus::where('forum_id', $forum_id)->get();

        return view(
            'app.forums-details',
            [
                'forum'=>$forum,
                'discussions'=>$discussions
            ]
        );
    }

    public function forumCommentStore(Request $request){
        $request->validate([
            'forum_id' => 'required|integer',
            'comment' => 'required|string',
        ]);

        Disqus::create([
            'forum_id'=>$request->forum_id,
            'disqus_id' => null,
            'user_id' => Auth::id(),
            'body' => $request->comment,
            'status' => 1,
        ]);

        return redirect()->route('forum_details', ['forum_id' => $request->forum_id]);
    }

    public function forumStore(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        Forum::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id, // или любой другой способ определения пользователя
            'importance' => 1
        ]);

        return redirect()->route('forums')->with('success', 'Форум ийгиликтүү түзүлдү!');
    }

    public function bookDetails($book_title_id)
    {
        $theme = Theme::find($book_title_id);

        $examples = Books::where('themes_id', $book_title_id)->where('type', 1)->get();
        $exercises = Books::where('themes_id', $book_title_id)->where('type', 2)->get();
        $literatures = Books::where('themes_id', $book_title_id)->where('type', 3)->get();
        $tests = Test::where('themes_id', $book_title_id)->get();

        return view('app.book-details', [
            'theme'=>$theme,
            'examples'=>$examples,
            'exercises'=>$exercises,
            'literatures'=>$literatures,
            'tests'=>$tests
        ]);
    }

    public function literature()
    {
        $files = Books::where('themes_id', null)->where('type', 3)->get();

        return view('app.literature', compact('files'));
    }

    public function teacher()
    {
        return view('app.teacher');
    }

    public function test($test_id)
    {
        $test = Test::find($test_id);
        $questions = Question::where('test_id', $test_id)->get();

        return view('app.test', ['test'=>$test, 'questions'=>$questions]);
    }

    public function testController(Request $request)
    {
        $user_id = Auth::id();
        $test_id = $request->test_id;
        $answers = $request->answers;
        $trueAnswers = 0;
        $questions = Question::where('test_id', $test_id)->get();


        if($answers){
            foreach ($questions as $question){
                foreach($question->answers as $ans){
                    if($answers[$question->id] && $ans->right && $answers[$question->id] == $ans->id){
                        $trueAnswers++;
                    }
                }
            }
            $testResult = Results::create([
                'answer' => implode('/', [$trueAnswers, count($questions)]),
                'test_id' => $test_id,
                'user_id' => $user_id,
                'status' => '1',
            ]);

            foreach ($answers as $key => $answer) {
                StudentTestAnswer::create([
                    'result_test_id' => $testResult->id,
                    'user_id' => $user_id,
                    'question_id' => $key,
                    'answer_id' => $answer
                ]);
            }

            return redirect()->route('test_result', ['result_test_id' => $testResult->id]);
        }

        return redirect()->route('test', ['test_id' => $test_id]);
    }

    public function testResult($result_test_id)
    {
        $user_id = Auth::id();
        $testResult = Results::where('id', $result_test_id)->where('user_id', $user_id)->first();
        $test = Test::find($testResult->test_id);
        $questions = Question::where('test_id', $test->id)->get();
        $userAnswers = StudentTestAnswer::where('result_test_id', $testResult->id)->where('user_id', $user_id)->get();

        if($testResult && $test && $questions && $userAnswers){
            foreach ($questions as $index => $question){
                foreach ($userAnswers as $userAnswer){
                    if($question->id == $userAnswer->question_id){
                        $questions[$index]->user_answer_id = $userAnswer->answer_id;
                        break;
                    }
                }
            }
        }

        return view(
            'app.testResult',
            [
                'test'=>$test,
                'testResult'=>$testResult,
                'questions'=>$questions
            ]
        );
    }

    public function profile(){
        $user = Auth::user();
        $results = Results::where('user_id', $user->id)->get();

        foreach ($results as $index => $result) {
            $results[$index]->test_title = Test::find($result->test_id)->title;
        }

        return view(
            'app.profile',
            [
                'user' => $user,
                'results' => $results
            ]
        );
    }

    public function downloadFile($fileName)
    {
        // Получаем полный путь к файлу
        $filePath = public_path('uploads/' . $fileName);

        // Проверяем существование файла
        if (file_exists($filePath)) {
            // Отправляем файл пользователю
            return response()->download($filePath);
        }

        // Если файл не найден, возвращаем ошибку 404
        abort(404);
    }
}
