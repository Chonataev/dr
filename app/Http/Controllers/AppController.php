<?php

namespace App\Http\Controllers;

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
        return view('app.book-details');
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
