<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $themes = Theme::all();
        return view('app.index', compact('themes'));
    }
}
