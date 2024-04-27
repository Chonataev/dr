<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function getThemes()
    {
        return Theme::all();
    }

    public function index()
    {
        return view('app.index');
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

    public function docs()
    {
        return view('app.docs');
    }

    public function test()
    {
        return view('app.test');
    }
}
