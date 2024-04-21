<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Contents::all();
        return view('contents.index', compact('contents'));
    }

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'theme_id' => 'required|integer', // Предполагается, что это внешний ключ на таблицу тем
            'status' => 'required|string',
        ]);

        Contents::create($request->all());

        return redirect()->route('contents.index')->with('success', 'Content created successfully!');
    }

    public function show(Contents $content)
    {
        return view('contents.show', compact('content'));
    }

    public function edit(Contents $content)
    {
        return view('contents.edit', compact('content'));
    }

    public function update(Request $request, Contents $content)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'theme_id' => 'required|integer', // Предполагается, что это внешний ключ на таблицу тем
            'status' => 'required|string',
        ]);

        $content->update($request->all());

        return redirect()->route('contents.index')->with('success', 'Content updated successfully!');
    }

    public function destroy(Contents $content)
    {
        $content->delete();

        return redirect()->route('contents.index')->with('success', 'Content deleted successfully!');
    }
}
