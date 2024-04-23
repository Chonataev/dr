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
        $themes = $this->getThemes();
        return view('app.index', compact('themes'));
    }

    public function forums()
    {
        $themes = $this->getThemes();
        return view('app.forums', compact('themes'));
    }

    public function forumDetails($forum_id)
    {
        $themes = $this->getThemes();
        return view('app.forums-details', compact('themes'));
    }

    public function bookDetails($book_title_id)
    {
        $themes = $this->getThemes();
        return view('app.book-details', compact('themes'));
    }

    public function docs()
    {
        $themes = $this->getThemes();
        return view('app.docs', compact('themes'));
    }

    public function test()
    {
        $themes = $this->getThemes();
        return view('app.test', compact('themes'));
    }
}
