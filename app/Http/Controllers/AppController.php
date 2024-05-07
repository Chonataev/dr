<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Books;
use App\Models\Forum;
use App\Models\Question;
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
        return view('app.forums-details');
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

        return redirect()->route('forums')->with('success', 'Forum created successfully!');
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

    public function testResult()
    {
        return view('app.test');
    }

    public function profile(){
        $user = Auth::user();

        return view('app.profile', ['user'=>$user]);
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
