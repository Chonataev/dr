<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    public function index()
    {
        $forum = Forum::all();
        if ( !$forum->isEmpty() )
        {
            foreach ($forum as $item) {
                $item->owner = User::find($item->user_id)->name;
                unset($item->user_id);
            }
        }
        return view('admin.forums.index', compact('forum'));
    }

    public function create()
    {
        return view('admin.forums.create');
    }

    public function store(Request $request)
    {
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

        return redirect()->route('forums.index')->with('success', 'Forum created successfully!');
    }

    public function show(Forum $forum)
    {
        return view('admin.forums.show', compact('forum'));
    }

    public function edit(Forum $forum)
    {
        return view('admin.forums.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'importance' => 'required|integer',
            'status' => 'required|string',
        ]);
        $forum = Forum::find($forum->id); // Предположим, что у вас есть переменная $id, содержащая идентификатор форума

        $forum->update([
            'title' => $request->title,
            'body' => $request->body,
            'importance' => $request->importance,
            'status' => $request->status,
        ]);


        return redirect()->route('forums.index')->with('success', 'Forum updated successfully!');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('forums.index')->with('success', 'Forum deleted successfully!');
    }
}
