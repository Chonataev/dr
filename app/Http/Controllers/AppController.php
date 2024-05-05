<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Test;
use App\Models\Theme;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $themes = Theme::all();

        return view('app.index', ['themes' => $themes]);
    }

    public function forums()
    {
        return view('app.forums');
    }

    public function forumDetails($forum_id)
    {
        return view('app.forums-details');
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
        return view('app.literature');
    }

    public function teacher()
    {
        return view('app.teacher');
    }

    public function test($test_id)
    {
        return view('app.test');
    }

    public function testResult()
    {
        return view('app.test');
    }

    public function profile(){
        return view('app.profile');
    }
}
